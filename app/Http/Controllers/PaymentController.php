<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Contrubution;
use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function callback(Request $request,$slug,$email){
        $transaction = $request->get('transaction_id');
        
        
        $sendMoney = new Checkout();
        $sendMoney->id_user =  Auth::user()->id ?? '0';
        $sendMoney->email =  Auth::user()->email ?? 'anonyme@gmail.com';
        $sendMoney->transaction_id =  $request->get('transaction_id');
        $sendMoney->transaction_status =  "Approved";
        $sendMoney->amount =  $slug;
         
        if ($sendMoney->save()) {
           //select id_campagnes where email = $email lastly on table contrubution 
            $id_campagne = DB::table('contrubutions')->where('email', $email)->orderBy('id', 'desc')->first();
            $id_campagne = $id_campagne->id_campagnes ?? '0';
            if($id_campagne != '0'){
                //update updated at campagne where id = $id_campagne with eloquent
                $campagne = Contrubution::find($id_campagne);
                $campagne->updated_at = date('Y-m-d H:i:s');
                $campagne->update();


            } else {
                //insert into table campagne
                die('error, ups ! Quelque chose s\'est mal passé');
            }

            

            $updateContrubution = Contrubution::where('email',$email)->orderBy('id','desc')->first()->update(['states_payment'=>1]);
            $notification_gobi = array(
                'title' => 'Féliciations',
                'sending' => "Votre contribution est parvenue avec succès. Merci pour votre contribution.",
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
            
        return back()->with('message','Payment is successful. Your transaction as is: '.$request->get('transaction_id'));
        

        


        
        
    }

}
