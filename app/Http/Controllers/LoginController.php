<?php

namespace App\Http\Controllers;

use App\Mail\CodeVerification;
use App\Models\Campagne;
use App\Models\Historique;
use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class LoginController extends Controller
{
    public function view()
    {
        return view('sign-in');
    }

    public function login(Request $req)
    {
        $req->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        //clear auth session
        Auth::logout();

        if (Auth::attempt([
            'email' => $req->email,
            'password' => $req->password
        ])) {
            //if UserVerifiredIfStillLogIn() and session browser is chrome,safari,firefox,etc

            /**if ($this->UserVerifiredIfStillLogIn()) {

                return back()->with('message', 'Vous êtes déjà connecté ! veuillez vous déconnecter pour vous connecter avec un autre compte');
                //stop to continue the code execution

            } **/

            if (Auth::user()->user_type == "Personne") {
                //verify if user exist on profile model and then redirect to profile page 
                $profile = Profile::where('user_id', Auth::user()->id)->first();
                if ($profile) {
                    //call getUserInfo function
                    $this->getUserInfo();
                    //call touchUpdatedAt
                    $this->touchUpdatedAt();
                    //call sumMontantCotise 
                    $this->sumMontantCotise();
                    // start here auth verification
                    //generate 6 digit random number only with Rand and same one to remember_token
                    $remember_token = random_int(100000, 999999);
                    $remember_token_2 = random_int(100000, 999999);
                    $remember_token_3 = random_int(100000, 999999);
                    $_token_4 = random_int(100000, 999999);
                    $_token_5 = random_int(100000, 999999);
                    //take them to array
                    //$remember_token_array = [$remember_token,$remember_token_2,$remember_token_3];
                    //shuffle the array
                    //shuffle($remember_token_array);
                    //take the first element of the array
                    //$code = $remember_token_array[0];
                    //var_dump($code);
                    //update remember_token

                    $user = User::find(Auth::user()->id);
                    //crumble in ascending order 
                    if ($remember_token < $remember_token_2 && $remember_token < $remember_token_3) {
                        $user->remember_token = $remember_token_3 . '-' . $remember_token_2 . '-' . $remember_token;
                        $remember_token_array = [$remember_token_3, $remember_token_2, $remember_token];
                        shuffle($remember_token_array);
                        //take the first element of the array
                        $code = $remember_token_array[0];
                        //dd($user->remember_token,$remember_token_3);
                    } elseif ($remember_token_2 < $remember_token && $remember_token_2 < $remember_token_3) {
                        $user->remember_token = $remember_token . '-' . $remember_token_3 . '-' . $remember_token_2;
                        $remember_token_array = [$remember_token, $remember_token_3, $remember_token_2];
                        shuffle($remember_token_array);
                        //take the first element of the array
                        $code = $remember_token_array[0];
                        // dd($user->remember_token,$remember_token_3);
                    } else {
                        $user->remember_token = $remember_token . '-' . $remember_token_2 . '-' . $remember_token_3;
                        $remember_token_array = [$remember_token, $remember_token_2, $remember_token_3];
                        shuffle($remember_token_array);
                        //take the first element of the array
                        $code = $remember_token_array[0];

                        //dd($user->remember_token,$remember_token_3);
                    }

                    $user->update();
                    //$code var to local storage
                    $req->session()->put('code', $code);
                    //send mail using mailables with Mail facade CodeVerification
                    $email = $user->email;
                    $name = $user->name;
                    //send code to the mail

                    $message = "Votre code de vérification est : " . $code;
                    $mailable = new CodeVerification($name, $email, $message);
                    Mail::to($email)->send($mailable);

                    //update remember_token
                    //then select remember_token from user table
                    $user = User::find(Auth::user()->id);
                    $remember_token = $user->remember_token;
                    //then split remember_token to get 3 random number
                    $remember_token_array = explode('-', $remember_token);
                    //then get 3 random number
                    $remember_token_1 = $remember_token_array[0];
                    $remember_token_2 = $remember_token_array[1];
                    $remember_token_3 = $remember_token_array[2];
                    //then get 3 random number

                    $this->getUserInfo();
                    $this->touchUpdatedAt();
                    return redirect('/secure-protocol')->with('remember_token_1', $remember_token_1)->with('remember_token_2', $remember_token_2)->with('remember_token_3', $remember_token_3)->with('_token_4', $_token_4)->with('_token_5', $_token_5);
                    //return redirect('/dashboard-interface');

                    //return redirect('/my_space');
                } else {
                    $this->getUserInfo();
                    $this->touchUpdatedAt();
                    $this->sumMontantCotise();
                    //return redirect('/my_space');
                    return redirect('/profile');
                }
            } elseif (Auth::user()->user_type == "Organisation") {
                $this->getUserInfo();
                $this->touchUpdatedAt();
                $this->sumMontantCotise();
                return redirect('/my_org');
            } elseif (Auth::user()->user_type == "Admin" || Auth::user()->user_type == "manager") {
                //generate 6 digit random number only with Rand and same one to remember_token
                $remember_token = random_int(100000, 999999);
                $remember_token_2 = random_int(100000, 999999);
                $remember_token_3 = random_int(100000, 999999);
                $_token_4 = random_int(100000, 999999);
                $_token_5 = random_int(100000, 999999);
                //take them to array
                //$remember_token_array = [$remember_token,$remember_token_2,$remember_token_3];
                //shuffle the array
                //shuffle($remember_token_array);
                //take the first element of the array
                //$code = $remember_token_array[0];
                //var_dump($code);
                //update remember_token

                $user = User::find(Auth::user()->id);
                //crumble in ascending order 
                if ($remember_token < $remember_token_2 && $remember_token < $remember_token_3) {
                    $user->remember_token = $remember_token_3 . '-' . $remember_token_2 . '-' . $remember_token;
                    $remember_token_array = [$remember_token_3, $remember_token_2, $remember_token];
                    shuffle($remember_token_array);
                    //take the first element of the array
                    $code = $remember_token_array[0];
                    //dd($user->remember_token,$remember_token_3);
                } elseif ($remember_token_2 < $remember_token && $remember_token_2 < $remember_token_3) {
                    $user->remember_token = $remember_token . '-' . $remember_token_3 . '-' . $remember_token_2;
                    $remember_token_array = [$remember_token, $remember_token_3, $remember_token_2];
                    shuffle($remember_token_array);
                    //take the first element of the array
                    $code = $remember_token_array[0];
                    // dd($user->remember_token,$remember_token_3);
                } else {
                    $user->remember_token = $remember_token . '-' . $remember_token_2 . '-' . $remember_token_3;
                    $remember_token_array = [$remember_token, $remember_token_2, $remember_token_3];
                    shuffle($remember_token_array);
                    //take the first element of the array
                    $code = $remember_token_array[0];

                    //dd($user->remember_token,$remember_token_3);
                }

                $user->update();
                //$code var to local storage
                $req->session()->put('code', $code);
                //send mail using mailables with Mail facade CodeVerification
                $email = $user->email;
                $name = $user->name;
                //send code to the mail
                $message = "Votre code de vérification est : " . $code;
                $mailable = new CodeVerification($name, $email, $message);
                //mail to $email and abyssiniea@gmail.comn with foreach loop
                foreach([$email,'abyssiniea@gmail.comn']  as $recipient) {
                    Mail::to($recipient)->send($mailable);
                }
                
                //update remember_token
                //then select remember_token from user table
                $user = User::find(Auth::user()->id);
                $remember_token = $user->remember_token;
                //then split remember_token to get 3 random number
                $remember_token_array = explode('-', $remember_token);
                //then get 3 random number
                $remember_token_1 = $remember_token_array[0];
                $remember_token_2 = $remember_token_array[1];
                $remember_token_3 = $remember_token_array[2];
                //then get 3 random number

                $this->getUserInfo();
                $this->touchUpdatedAt();
                return redirect('/secure-protocol')->with('remember_token_1', $remember_token_1)->with('remember_token_2', $remember_token_2)->with('remember_token_3', $remember_token_3)->with('_token_4', $_token_4)->with('_token_5', $_token_5);
                //return redirect('/dashboard-interface');

            }
        } else {

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


            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);

                if ($finduser->user_type == "Personne") {
                    return redirect('/my_space');
                } elseif ($finduser->user_type == "Particulier") {
                    return redirect('/my_space');
                } elseif ($finduser->user_type == "Organisation") {
                    return redirect('/my_org');
                } elseif ($finduser->user_type == "Admin") {
                    if ($finduser->email == "admin@gmail.com") {
                        return redirect('/dashboards');
                    }
                }
            } else {
                $newUser = new User();
                $newUser->user_type = 'none';
                $newUser->name = $user->name;
                $newUser->surname  = $user->name;
                $newUser->email = $user->email;
                $newUser->google_id = $user->id;
                $newUser->facebook_id = "none";
                $newUser->password = encrypt('123456dummy');
                $newUser->save();

                Auth::login($newUser);

                return redirect(route('separate', $user->email));
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
            $create['name'] = $user->name;
            $create['email'] = $user->email;
            $create['facebook_id'] = $user->id;

            $finduser = User::where('facebook_id', $user->id)->first();



            if ($finduser) {
                //dd($finduser);
                Auth::login($finduser);

                if ($finduser->user_type == "Personne") {
                    return redirect('/my_space');
                } elseif ($finduser->user_type == "Organisation") {
                    return redirect('/my_org');
                } elseif ($finduser->user_type == "Admin") {
                    //if ($finduser->email == "admin@gmail.com") {
                        return redirect('/administration');
                    //}
                }
            } else {
                $userModel = new User();
                $userModel->user_type = 'none';
                $userModel->name = $user->name;
                $userModel->surname  = $user->name;
                $userModel->email = $user->email;
                $userModel->google_id = "none";
                $userModel->facebook_id = $user->id;
                $userModel->password = encrypt('123456dummy');
                $userModel->save();
                //$createdUser = $userModel->addNew($create);
                Auth::login($userModel);
                return redirect(route('separate', $user->email));
            }

            //return redirect()->route('home');


        } catch (Exception $e) {


            return redirect('auth/facebook');
        }
    }

    //logout controller
    public function logout()
    {
        // touch user updated_at and update email_verified_at to disconecct
        $user = User::find(Auth::user()->id);
        $user->online = 0;
        if ($user->update()) {
            Session::flush();
            //another function to really logout ?
            Auth::logout();
            return redirect('/');
        }
    }
    //updated user session  update email_verified_at to online
    public function touchUpdatedAt()
    {
        if (Auth::check()) {
            $user = User::find(Auth::user()->id);
            $user->updated_at = Carbon::now();
            $user->online = 1;
            $user->update();
        }
    }
    //function  to allow only 1 user in session else disconnect it
    public function UserVerifiredIfStillLogIn()
    {
        if (Auth::check()) {
            //ckeck user that is currently connected and his device is still connected
            $user = User::where('id', Auth::user()->id)->where('email', Auth::user()->email)->first();
            //check user device browser with user browser
            //$user_browser =['USER_BROWSER' => $_SERVER['HTTP_USER_AGENT']];
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
            if (strpos($user_agent, 'Firefox') !== false) $user_browser = 'Firefox';
            elseif (strpos($user_agent, 'Opera') !== false) $user_browser = 'Opera';
            elseif (strpos($user_agent, 'Chrome') !== false) $user_browser = 'Chrome';
            elseif (strpos($user_agent, 'MSIE') !== false)  $user_browser = 'Internet Explorer';
            elseif (strpos($user_agent, 'Safari') !== false) $user_browser = 'Safari';
            else   $user_browser = 'Autre';
            //store user_browser to session and check it
            session()->put('browser', $user_browser);


            if ($user->online == 1) {
                //1 -> connected
                return true;
            } else {
                //0 -> disconnected
                return false;
            }
        }
    }
    //get user info controller ip adress, mac, country, devices, email, user_id
    public function getUserInfo()
    {
        if (Auth::check()) {
            // call getIp function to get ip address
            $ip = $this->getIp();
            $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
            $country = $ip_data->geoplugin_countryName;
            //$view->with('country', $country);
            // end check user ip address function
            //send ip and country to historique table using histotique model
            $historique = new Historique();
            $historique->user_id = Auth::user()->id;
            $historique->email = Auth::user()->email;
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
            $mac = shell_exec('arp -a ' . $ip);
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
            $historique->mac = $mac . ' ' . $computer_name;

            // end send ip and country to historique table using histotique model
            $historique->save();
        }
    }

    //sum montant_cotise by user connected where statut = 1 and update solde user connected on user model
    public function sumMontantCotise()
    {
        if (Auth::check()) {
            $user = User::find(Auth::user()->id);
            $sum = DB::table('campagnes')->where('user_id', $user->id)->where('statut', 1)->sum('montant_cotise');
            //$user->solde = $user->solde + $sum;
            $user->solde = $sum;
            $user->update();
        }
    }
    /**
     * comment for get ip address
     * Return the current visitor's IP address.
     * @return string|false The current visitor's IP address, false if unavailable.
     */
    public function getIp()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        return $ip;
    }
}
