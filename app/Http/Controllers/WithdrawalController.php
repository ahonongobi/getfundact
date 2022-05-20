<?php

namespace App\Http\Controllers;

use App\Mail\LetAdmin;
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
        $withdrawalinfo =  Campagne::where('user_id',Auth::user()->id)->where('id',$request->id)->where('statut',1)->first();
        
        $profile  = Profile::where('user_id',Auth::user()->id)->first();
        $montant = $withdrawalinfo->montant_cotise;
        return view('user_dash.withdrawal',compact('withdrawalinfo','profile','montant'));
    }
   //getlistWithdrawal
    public function getlistWithdrawal(){
        $amount = request()->filled('amount');
        //filled is a laravel function to check if the value is not empty
        //filled idWallet and amount
        if(request()->filled('idWallet') && request()->filled('amount')){
            $idWallet = request()->idWallet;
            $amount = request()->amount;
            $withdrawalinfo =  Campagne::where('user_id',Auth::user()->id)->where('id',$idWallet)->where('statut',1)->first();
            $profile  = Profile::where('user_id',Auth::user()->id)->first();
            $montant = $withdrawalinfo->montant_cotise;
            //get campagne name
            $campagne_name = $withdrawalinfo->name;
            //get campagne id
            $campagne_id = $withdrawalinfo->id;
            //compact variable with redirect : nom_banque,iban,bic,montant 
            $nom_banque = $profile->nom_banque;
            $iban = $profile->iban;
            $bic = $profile->bic;
            //return redirect 
            return redirect('user_dash.withdrawal')->with('nom_banque',$nom_banque)->with('iban',$iban)->with('bic',$bic)->with('montant',$montant)->with('campagne_name_data',$campagne_name)->with('campagne_id_data',$campagne_id);
            
            
        }
        
       // return view('/user_dash.withdrawal',compact('amount','id'));
    }
    //withdrawalTotal view function
    public function withdrawalTotal(){
        
        return view('user_dash.withdrawal');
    }
    public function withdrawal(Request $request){
        //update substracte user solde from montant withdrawal
        $solde_0 = User::where('id',Auth::user()->id)->first();
        $solde_0->solde = $solde_0->solde - $request->montant;
        
        $solde_0->update(); 
        //update compagne table id_user statut to 2
        $campagne = Campagne::where('id',$request->id)->where('user_id',Auth::user()->id)->where('statut',1)->get();
        foreach($campagne as $campagnes){
            $campagnes->statut = 2;
            $campagnes->update();
        }
        //dd($request->nom_campagne);
        $withdrawalinfo =  new Withdrawal();
        $withdrawalinfo->id_user  = Auth::user()->id;
        //$withdrawalinfo->id_campagne = $request->id;
        $withdrawalinfo->nom_campagne =  $request->nom_campagne;
        //montant
        $withdrawalinfo->montant = $request->montant;
        //payment_method
        $withdrawalinfo->payment_method = $request->payment_method;
        //if_number 
        $withdrawalinfo->if_number = $request->if_number ?? null;
        if ($withdrawalinfo->save()) {
               
            $notification_gobi = array(
                'title' => 'Félicitations',
                'sending' => 'Les informations de votre rétrait enrégistrées avec succès. Votre sous vous parviendra en peu de temps. Soyez patient!!',
                'type' => 'success',
        
                );
            $message ="Nous vous informons que votre demande de retrait a été prise en compte. Chaque demande de retrait met entre 2 à 3 jours pour être traitée et validée.";
            //message admin
            $message2 = "Un nouveau retrait a été effectué sur votre compte. Veuillez vérifier les informations de la demande de retrait.";

            $mailable = new OrderShipped(Auth::user()->username,$request->email,$message);
            Mail::to(Auth::user()->email)->send($mailable);
            //notify mail to this address  payment@getfundact.com using LetAdmin mailable
            $mailable = new LetAdmin(Auth::user()->email,$withdrawalinfo->montant,$message2);
            Mail::to("payment@getfundact.com")->send($mailable);
            $notification_gobi = array(
                'title' => 'Félicitations',
                'sending' => "Votre demande de rétrait a été prise en compte. Vous recevrez un email de confirmation dans les prochains jours.",
                'type' => 'success',
        
                );
                //forget session: montant,campagne_id_data
                session()->forget('montant');
                session()->forget('campagne_id_data');

                return redirect("/my_space")->with($notification_gobi);
        }
        
    }
}
