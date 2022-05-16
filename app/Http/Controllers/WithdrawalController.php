<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\Campagne;
use App\Models\Profile;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WithdrawalController extends Controller
{
    public function view(){
        $withdrawalinfo =  Campagne::where('user_id',Auth::user()->id)->get();
        $profile  = Profile::where('user_id',Auth::user()->id)->first();
        return view('user_dash.withdrawal',compact('withdrawalinfo','profile'));
    }
    //listWithdrawal view function
    public function listWithdrawal(){
        $withdrawalinfo =  Campagne::where('user_id',Auth::user()->id)->where('statut',1)->where('montant_cotise','>',0)->get();
        $profile  = Profile::where('user_id',Auth::user()->id)->first();
        return view('user_dash.list-withdrawal',compact('withdrawalinfo','profile'));
    }
    //listWithdrawalPost
    public function listWithdrawalPost(Request $request){
        $withdrawalinfo =  Campagne::where('user_id',Auth::user()->id)->where('id',$request->id)->where('statut',1)->where('montant_cotise','>',0)->get();
        $profile  = Profile::where('user_id',Auth::user()->id)->first();
        return view('user_dash.withdrawal',compact('withdrawalinfo','profile'));
    }

    public function withdrawal(Request $request){
        //update substracte user solde from montant withdrawal
        $solde_0 = User::where('id',Auth::user()->id)->first();
        $solde_0->solde = $solde_0->solde - $request->montant;
        
        $solde_0->update();
        //update compagne table id_user statut to 2
        $campagne = Campagne::where('user_id',Auth::user()->id)->where('statut',1)->get();
        foreach($campagne as $campagnes){
            $campagnes->statut = 2;
            $campagnes->update();
        }
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
