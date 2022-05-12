<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\Campagne;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WithdrawalController extends Controller
{
    public function view(){
        $withdrawalinfo =  Campagne::where('user_id',Auth::user()->id)->get();
        return view('user_dash.withdrawal',compact('withdrawalinfo'));
    }

    public function withdrawal(Request $request){
        //dd($request->nom_campagne);
        $withdrawalinfo =  new Withdrawal();
        $withdrawalinfo->id_user  = Auth::user()->id;
        //$withdrawalinfo->id_campagne = $request->id;
        $withdrawalinfo->nom_campagne =  $request->nom_campagne;
        
        if ($withdrawalinfo->save()) {
               
            $notification_gobi = array(
                'title' => 'Félicitations',
                'sending' => 'Les informations de votre rétrait enrégistré avec succès. votre sous vous parviendra en peu de temps. Soyez patient!!',
                'type' => 'success',
        
                );
            $message ="Nous vous informons que votre demande de retrait a été prise en compte. Chaque demande de retrait met entre 3 et 5 jours pour être traitée et validée.";


            $mailable = new OrderShipped(Auth::user()->username,$request->email,$message);
            Mail::to(Auth::user()->email)->send($mailable);
            $notification_gobi = array(
                'title' => 'Félicitations',
                'sending' => "Votre demande de rétrait a été prise en compte. Vous recevrez un email de confirmation dans les prochains jours.",
                'type' => 'success',
        
                );
                return back()->with($notification_gobi);
        }
        
    }
}
