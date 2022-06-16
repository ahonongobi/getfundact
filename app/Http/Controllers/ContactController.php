<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    

    public function send_mail(Request $request){
            //reuqest validation of email, name, message, subject
             if(empty($request->object)){
                $email = "abyssiniea@gmail.com";
                $mailable = new ContactMessage($request->subject,$request->email,$request->message,$request->name);
                Mail::to($email)->send($mailable);
                    $Yes = "Yes";
                    $titre = "Super";
                    $messages = "Nous avons bien reçu votre message. Un de nos assistant vous contactera dans quelques minutes.";
                    $type = "success";
                    $text = "success";
                    $notification_gobi = array(
                        'title' => 'Envoyé',
                        'sending' => "Nous avons bien reçu votre message. Un de nos assistant vous contactera dans quelques minutes.",
                        'type' => 'success',
                        'success' => true,
                
                        );
                        //if send, return ajax response to use that in  contact-form-script.js
                        return response()->json([
                            'status' => true,
                            'message' => 'Nous avons bien reçu votre message. Un de nos assistant vous contactera dans quelques minutes.',
                        ]);
                         //return back()->with($notification_gobi);
             }
        
            
    }
}
