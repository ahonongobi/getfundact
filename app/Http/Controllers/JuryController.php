<?php

namespace App\Http\Controllers;

use App\Mail\CampagneACtive;
use App\Mail\MessageConfirmation;
use App\Mail\Order;
use App\Models\Campagne;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class JuryController extends Controller
{
    public function ValidatePost($id){
      $user = User::where('id',$id)->first();
      DB::update("UPDATE users SET states=? WHERE id=?",[
          1,$id
      ]);
      //send confirmation to user that his account is active with CampagneACtive model
      
        $email = $user->email;
        $name = $user->name;
        $message = "Votre compte a été validé avec succès. Vous pouvez désormais vous connecter sur getfundact.com et créer votre campagne.";
        $mailable = new CampagneACtive($name,$email,$message);
        Mail::to($email)->send($mailable);
        $notification_gobi = array(
          'title' => 'Succès',
          'sending' => "Le compte a été validé avec succès",
          'type' => 'success',
  
          );
        return back()->with($notification_gobi);
    }
    public function unvalidatePost($id){
        $user = User::where('id',$id)->first();
        DB::update("UPDATE users SET states=? WHERE id=?",[
            0,$id
        ]);
        //send confirmation to user that his account is active with CampagneACtive model
          
            $email = $user->email;
            $name = $user->name;
            $message = "Votre compte a été désactivé avec succès";
            $mailable = new CampagneACtive($name,$email,$message);
            Mail::to($email)->send($mailable);
            $notification_gobi = array(
              'title' => 'Succès',
              'sending' => "Le compte a été désactivé avec succès",
              'type' => 'success',
      
              );
            return back()->with($notification_gobi);
      }

      public function deleteUser($id){
        $user = User::where('id',$id)->first();
        DB::update("UPDATE users SET states=? WHERE id=?",[
            2,$id
        ]);
        //dele the user from the database confirlation message
        $notification_gobi = array(
          'title' => 'Succès',
          'sending' => "Le compte a été supprimé avec succès",
          'type' => 'success',
  
          );
        return back()->with($notification_gobi);
      }


      //campagne
      public function validateCampagne($id){
        $user = Campagne::where('id',$id)->first();
        DB::update("UPDATE campagnes SET statut=? WHERE id=?",[
            1,$id
        ]);
        //send mail to user that his campagne is validated
        $user = User::where('id',$user->user_id)->first();
        $email = $user->email;
        $name = $user->name;
        $camp = Campagne::where('id',$id)->first();
        $campagne = $camp->name;
        $message = "Votre campagne ".$campagne." est validée";
        $mailable = new CampagneACtive($name,$email,$message);
        Mail::to($email)->send($mailable);
        $notification_gobi = array(
          'title' => 'Succès',
          'sending' => "Campagne validée avec succès",
          'type' => 'success',
  
          );
        return back()->with($notification_gobi);
      }

      public function unvalidateCampagne($id){
        $user = Campagne::where('id',$id)->first();
        DB::update("UPDATE campagnes SET statut=? WHERE id=?",[
            0,$id
        ]);
        //send mail to user that his campagne is invalidated
        $users = User::where('id',$user->user_id)->first();
        $email = $users->email;
        $name = $users->name;
        $camp = Campagne::where('id',$id)->first();
        $campagne = $camp->name;
        $message = "Votre campagne ".$campagne." est invalidée";
        $mailable = new CampagneACtive($name,$email,$message);
        Mail::to($email)->send($mailable);
        $notification_gobi = array(
          'title' => 'Succès',
          'sending' => "Campagne invalidée avec succès",
          'type' => 'success',
  
          );
        return back()->with($notification_gobi);
        
      }

      //start pay and unpay user

      public function pay($id){
        $user = Withdrawal::where('id',$id)->first();
        DB::update("UPDATE withdrawals SET statut=? WHERE id=?",[
            1,$id
        ]);
        //send mail to user that his withdrawal is invalidated
        $users = User::where('id',$user->id_user)->first();
        $email = $users->email;
        $name = $users->name;
        //votre demande de retrait de 200XOF  a été validée
        $message = "Votre demande de retrait de ".$user->montant."XOF a été validée";
        $mailable = new Order($name,$email,$message);
        Mail::to($email)->send($mailable);
        $notification_gobi = array(
          'title' => 'Succès',
          'sending' => "Demande de retrait validée avec succès",
          'type' => 'success',
  
          );
          
        return back()->with($notification_gobi);
       // return back()->with('success','Campagne désactivée avec succès!!!');
      }


      public function unpay($id){
        $user = Withdrawal::where('id',$id)->first();
        DB::update("UPDATE withdrawals SET statut=? WHERE id=?",[
            0,$id
        ]);
        return back()->with('success','Campagne désactivée avec succès!!!');
      }
     
      
}
