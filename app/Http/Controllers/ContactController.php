<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    

    public function send_mail(Request $request){
        
        
            $email = "abyssiniea@gmail.com";
            $mailable = new ContactMessage($request->subject,$request->email,$request->message,$request->name);
            Mail::to($email)->send($mailable);
                $Yes = "Yes";
                $titre = "Super";
                $messages = "Nous avons bien reçu votre message. un de nos assistant vous contactera dans quelques minutes.";
                $type = "success";
                $notification_gobi = array(
                    'title' => 'Envoyé',
                    'sending' => "Nous avons bien reçu votre message. un de nos assistant vous contactera dans quelques minutes.",
                    'type' => 'success',
            
                    );
                return back()->with($notification_gobi);
    }
}
