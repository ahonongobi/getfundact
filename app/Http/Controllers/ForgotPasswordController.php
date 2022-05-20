<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class ForgotPasswordController extends Controller
{
    public function submitForgetPasswordForm(Request $request)

    {

        $request->validate([

            'email' => 'required|email|exists:users',

        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([

            'email' => $request->email,

            'token' => $token,

            'created_at' => Carbon::now()

        ]);

        Mail::send('emails.forgetPassword', ['token' => $token], function ($message) use ($request) {

            $message->to($request->email);

            $message->subject('Réinitialisation de votre mot de passe ');
        });
        
        $notification_gobi = array(
            'title' => 'Envoyé',
            'sending' => "Nous vous avons envoyé un lien pour réinitialiser votre mot de passe par e-mail.",
            'type' => 'success',
    
            );
            return back()->with($notification_gobi);
        
    }

    public function showResetPasswordForm($token) { 
       $checkIfLinkExpired = DB::table('password_resets')->where('token', $token)->first();
       if (Carbon::now()->greaterThan(Carbon::parse($checkIfLinkExpired->created_at)->addDay())) {
        $notification_gobi = "Le lien de réinitialisation de votre mot de passe a expiré.";
                
        return view('forgetPasswordLink',['token' => $token, 'notification_gobi' => $notification_gobi]);
              
         } else {
            return view('forgetPasswordLink', ['token' => $token]); 
       }
        

     }

     public function submitResetPasswordForm(Request $request)

     {

         $request->validate([

             'email' => 'required|email|exists:users',

             'password' => 'required|string|min:6|confirmed',

             'password_confirmation' => 'required'

         ]);

         $updatePassword = DB::table('password_resets')

                             ->where([

                               'email' => $request->email, 

                               'token' => $request->token

                             ])

                             ->first();

         if(!$updatePassword){

            $notification_gobi = array(
                'title' => 'Erreur',
                'sending' => "Le token est invalide ou a expiré.",
                'type' => 'warning',
        
                );
                return back()->with($notification_gobi);

            // return back()->withInput()->with('error', 'Invalid token!');

         }

         $user = User::where('email', $request->email)

                     ->update(['password' => Hash::make($request->password)]);



         DB::table('password_resets')->where(['email'=> $request->email])->delete();
    
         return redirect('/login')->with('message', 'Votre mot de passe a été changé avec succès!');

     }
}
