<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Contrubution;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContrubutionController extends Controller
{
    public function sendMoney(Request $request){
        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'email'=> 'required',
            'montant' => 'required',
            'numero'=> 'required',
            //'inlineRadioOptions'=>'required',
        ]);
        //dd($request->id_author);
        $okToSendMoney = new Contrubution();
        $okToSendMoney->id_user = Auth::user()->id ?? '0';
        
        if (Auth::check()) {
            $takeProfile = Profile::where('user_id',Auth::user()->id)->first();

        }
        $okToSendMoney->id_campagnes = $request->id_campagne;
        $okToSendMoney->nom_du_porteur = $request->nom_du_porteur;
        $okToSendMoney->id_author = $request->id_author;
        $okToSendMoney->photo = $takeProfile->photo ?? 'anonyme.png';
        $var_name=$okToSendMoney->name = $request->name;
        $var_surname=$okToSendMoney->surname = $request->surname;
        $var_email=$okToSendMoney->email = $request->email;
        $okToSendMoney->numero = $request->numero;
        $var_montant=$okToSendMoney->montant = $request->montant;
        $okToSendMoney->payment = 'null';
        if ($okToSendMoney->save()) {
            $notification_gobi = array(
                'title' => 'Féliciations',
                'sending' => "Votre contribution est parvenue avec succès. Merci pour votre participation.",
                'type' => 'success',
        
                );
                return view('invest_dash.checkout',compact('var_name','var_email','var_montant','var_surname'));
        }
        

    }
    public function checkout(Request $request){
               // dd($_POST);
                $transaction_id =  $_POST['transaction-id'];
                $transaction_status =  $_POST['transaction-status'];
                $sendMoney = new Checkout();
                $sendMoney->id_user =  Auth::user()->id ?? '0';
                $sendMoney->email =  Auth::user()->email ?? 'anonyme@gmail.com';
                $sendMoney->transaction_id =  $_POST['transaction-id'];
                $sendMoney->transaction_status =  $_POST['transaction-status'];
                $sendMoney->amount =  $request->amount;


                if ($sendMoney->save()) {
                    //$updateContrubution = Contrubution::where('email',$request->email)->update(['states_payment'=>1]);
                    $notification_gobi = array(
                        'title' => 'Féliciations',
                        'sending' => "Votre contribution est parvenue avec succès. Merci pour votre esprit de partage et solidarité.",
                        'type' => 'success',
                
                        );
                        if (Auth::check()) {
                            if (Auth::user()->user_type =="Organisation") {
                                return redirect('/my_org')->with($notification_gobi);
                            } elseif(Auth::user()->user_type =="Personne") {
                                return redirect('/my_space')->with($notification_gobi);
                            }
                            
                            
                        } else {
                            return redirect('/')->with($notification_gobi);
                        }
                        
                }
               
                
    }
}
