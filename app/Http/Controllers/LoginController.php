<?php

namespace App\Http\Controllers;

use App\Models\Historique;
use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function view(){
        return view('sign-in');
    }

    public function login(Request $req) {
        $req->validate([
            'email' => ['required'] ,
            'password' => ['required'],
        ]);
        
       
        if(Auth::attempt([
            'email' => $req->email,
            'password' => $req->password
        ])){

            if(Auth::user()->user_type =="Personne"){
                //verify if user exist on profile model and then redirect to profile page 
                $profile = Profile::where('user_id',Auth::user()->id)->first();
                if($profile){
                    //call getUserInfo function
                   $this->getUserInfo();
                   //call touchUpdatedAt
                     $this->touchUpdatedAt();
                    return redirect('/my_space');
                    
                }else{
                    $this->getUserInfo();
                    $this->touchUpdatedAt();
                    return redirect('/profile');
                }

                
            } 
            elseif(Auth::user()->user_type =="Organisation"){
                $this->getUserInfo();
                $this->touchUpdatedAt();
                return redirect('/my_org');
            } 

            elseif(Auth::user()->user_type =="Admin"){
                
                    $this->getUserInfo();
                    $this->touchUpdatedAt();
                    return redirect('/dashboard-interface');
                
            }
            
            
        }else{
            
            $notification_gobi = array(
                'title' => 'Désolé',
                'sending' => "E-mail ou mot de passe incorrect !!!.",
                'type' => 'warning',
        
                );
                return back()->with($notification_gobi);
    
        }

    }


    //social auth

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
      
    public function handleGoogleCallback()
    {
        try {
    
            $user = Socialite::driver('google')->user();
            //dd($user);
     
            $finduser = User::where('google_id', $user->id)->first();
     
            if($finduser){
     
                Auth::login($finduser);
    
                if($finduser->user_type =="Personne"){
                    return redirect('/my_space');
                } 
                elseif($finduser->user_type =="Particulier"){
                    return redirect('/my_space');
                }
                elseif($finduser->user_type =="Organisation"){
                    return redirect('/my_org');
                } 
    
                elseif($finduser->user_type =="Admin"){
                    if($finduser->email =="admin@gmail.com")
                    {
                        return redirect('/dashboards');
                    }
                }
     
            }
            else{
                $newUser = new User();
                    $newUser->user_type= 'none';
                    $newUser->name = $user->name;
                    $newUser->surname  = $user->name;
                    $newUser->email=$user->email;
                    $newUser->google_id = $user->id;
                    $newUser->facebook_id = "none";
                    $newUser->password = encrypt('123456dummy');
                    $newUser->save();
    
                    Auth::login($newUser);
     
                return redirect(route('separate',$user->email));
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    //facebook

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $create['name'] = $user->getName();
            $create['email'] = $user->getEmail();
            $create['facebook_id'] = $user->getId();

            $finduser = User::where('facebook_id', $user->getId())->first();

            
            
            if($finduser){
     
                Auth::login($finduser);
    
                if($finduser->user_type =="Personne"){
                    return redirect('/my_space');
                } 
                elseif($finduser->user_type =="Organisation"){
                    return redirect('/my_org');
                } 
    
                elseif($finduser->user_type =="Admin"){
                    if($finduser->email =="admin@gmail.com")
                    {
                        return redirect('/administration');
                    }
                }
     
            }

            else{
            $userModel = new User;
            $createdUser = $userModel->addNew($create);
            Auth::loginUsingId($createdUser->id);
                return redirect(route('separate',$user->getEmail()));
            }

            //return redirect()->route('home');


        } catch (Exception $e) {


            return redirect('auth/facebook');


        }
    }

    //logout controller
    public function logout(){
        Auth::logout();
        
        return redirect('/');
    }
    //updated user session
    public function touchUpdatedAt(){
        if (Auth::check()) {
            $user = User::find(Auth::user()->id);
            $user->updated_at = Carbon::now();
            $user->update();
        }
    }
    //get user info controller ip adress, mac, country, devices, email, user_id
    public function getUserInfo(){
        if (Auth::check()) {
            // check user ip address function
            $ip = $_SERVER['REMOTE_ADDR'];
            $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
            $country = $ip_data->geoplugin_countryName;
            //$view->with('country', $country);
            // end check user ip address function
            //send ip and country to historique table using histotique model
            $historique = new Historique();
            $historique->user_id = Auth::user()->id;
            $historique->email= Auth::user()->email;
            $historique->ip = $ip;
            $historique->country = $country ?? "Not found";
            //devices
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
            if (strpos($user_agent, 'Firefox') !== false) $historique->devices = 'Firefox';
            elseif (strpos($user_agent, 'Opera') !== false) $historique->devices = 'Opera';
            elseif (strpos($user_agent, 'Chrome') !== false) $historique->devices = 'Chrome';
            elseif (strpos($user_agent, 'MSIE') !== false) $historique->devices = 'Internet Explorer';
            elseif (strpos($user_agent, 'Safari') !== false) $historique->devices = 'Safari';
            else $historique->devices = 'Autre';
            //Mac address of the pc and send to historique table
            $mac = shell_exec('arp -a '.$ip);
            $mac = str_replace(' ', '', $mac);
            $mac = str_replace('-', '', $mac);
            $mac = str_replace('(', '', $mac);
            $mac = str_replace(')', '', $mac);
            $mac = str_replace('at', '', $mac);
            $mac = str_replace($ip, '', $mac);
            $mac = str_replace(':', '', $mac);
            $mac = str_replace('[', '', $mac);
            $mac = str_replace(']', '', $mac);
            $mac = str_replace('	', '', $mac);
            $mac = str_replace('	', '', $mac);
            $mac = str_replace('	', '', $mac);
            $mac = str_replace('	', '', $mac);
            $mac = str_replace('	', '', $mac);
            $mac = str_replace('	', '', $mac);
            $mac = str_replace('	', '', $mac);
            $mac = str_replace('	', '', $mac);
            $mac = str_replace('	', '', $mac);
             //get user computer name
            $computer_name = shell_exec('hostname');
            $historique->mac = $mac.' '.$computer_name;
            
            // end send ip and country to historique table using histotique model
            $historique->save();
        }
    }

    // touch updated_at colun when user is connected
    
}
