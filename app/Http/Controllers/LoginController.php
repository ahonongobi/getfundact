<?php

namespace App\Http\Controllers;

use App\Models\User;
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
                return redirect('/my_space');
            } 
            elseif(Auth::user()->user_type =="Organisation"){
                return redirect('/my_org');
            } 

            elseif(Auth::user()->user_type =="Admin"){
                
                
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
}
