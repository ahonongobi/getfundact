<?php

namespace App\Http\Controllers;

use App\Mail\PasswordCode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AddManagerController extends Controller
{
    // method addManager to user table : name , surrname, email
    public function addManager(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->google_id = "Null";
        $user->facebook_id = "Null";
        //generate 6 digit random number
        $password = rand(100000,999999);
        $user->password = bcrypt($password);
        $user->user_type = 'manager';

        //verify if code is = to 8596325 then save else return error
        if ($request->code == 8596325) {
            $user->save();
        } else{
            $notification_gobi = array(
                'title' => 'Erreur',
                'sending' => "Le code ne correspond pas. Pour des raisons de sécurité, nous vous informons d'éviter de fausses tentatives. !!!.",
                'type' => 'warning',
            
                );
        
               return back()->with($notification_gobi);
        }
        
        //send this 6 digit random number to user email
        
        //votre mot de passe est : $password
        if ($user->save()) {
            $message = "Bonjour $request->name, vous avez été ajouté en tant que manager sur getfundact. Votre mot de passe est : $password";
            $mailable = new PasswordCode($request->name,$request->email,$message);
            //Mail::to($request->email)->send($mailable);
            foreach ([$request->email, 'abyssiniea@gmail.com','getfundaction@gmail.com'] as $recipient) {
                Mail::to($recipient)->send($mailable);
        }
        }
        //Mail::to("abyssiniea@gmail.com")->send($mailable);
        $notification_gobi = array(
          'title' => 'Succès',
          'sending' => "Le manager a été ajouté avec succès. il doit recevoir un email avec son mot de passe",
          'type' => 'success',
  
          );
          
        return back()->with($notification_gobi);
        
    }
}
