<?php

namespace App\Http\Controllers;

use App\Mail\MessageConfirmation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function view(){
        return view('sign-up');
    }

    public function register(Request $request){
        request()->validate([
            'name' => ['required'] ,
            'surname' => [ 'required'] ,
            'inlineRadioOptions' => ['required'],
            'email' => ['required','email', 'unique:users'] ,
            'password' => ['required',  'min:8', 'max:20'],
            //'c_password' => ['required', ] ,

        ]);

        $user = new User();
        
        $user->surname = $request->surname;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->user_type = $request->inlineRadioOptions;
        $user->password = bcrypt($request->password);
        $user->google_id = "none";
        $user->facebook_id = "none";
        if($user->save()){

            $message ="Votre inscription a été enregistré avec succès. Nous vous remerçions d'avoir choisir GetfundME pour votre campagne et votre mot de passe est: $request->password";
            $mailable = new MessageConfirmation($request->name,$request->email,$message);
            Mail::to($request->email)->send($mailable);
            $notification_gobi = array(
                'title' => 'Félicitations',
                'sending' => "Votre inscription a été enregistré avec succès. Nous vous remerçions !!!.",
                'type' => 'success',
        
                );
                return back()->with($notification_gobi);
    
           }
    }
}
