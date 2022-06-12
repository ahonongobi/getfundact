<?php

namespace App\Http\Controllers;

use App\Mail\Order;
use App\Mail\ReminderEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReminderEmailController extends Controller
{
    //function to send reminder email to user that his account is not activated
    public function sendReminderEmail($id)
    {   
        $user = User::findOrFail($id);
        if ($user) {

            $name = $user->name;
            $email = $user->email;
            $message = "Bonjour, il y a quelques jours, vous avez fait une inscription sur notre plateforme de crowdfunding. Mais vous n'avez pas complété votre profil, veuillez le compléter dans votre espace personnel. Notre équipe support est disponible 24h/24 pour vous aider en cas de besoin. Vous devez aussi anticiper pour créer votre campagne afin de toucher un plus grand nombre le plus vite que possible. Nous attendons votre campagne. Profitez-en bien !";
            $mailable = new Order($name,$email,$message);
            $send = Mail::to($email)->send($mailable);
            $notification_gobi = array(
              'title' => 'Succès',
              'sending' => "L'email de confirmation a été envoyé avec succès",
                'type' => 'success',
        
                );
                if ($send) {
                    return back()->with($notification_gobi);
                }
                if (!$send){
                    $notification_gobi = array(
                      'title' => 'Succès',
                      'sending' => "L'email de confirmation a été envoyé avec succès",
                        'type' => 'success',
                
                        );
                    return back()->with($notification_gobi);
                }
            
        }
        else 
        {
            $notification_gobi = array(
                'title' => 'Succès',
                'sending' => "L'email de confirmation a été envoyé avec succès",
                  'type' => 'warning',
          
                  );
            return back()->with($notification_gobi);
          
                 
        }
    }
}
