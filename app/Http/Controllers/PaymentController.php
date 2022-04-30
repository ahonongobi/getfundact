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

           $updateContrubution = Contrubution::where('email',$email)->orderBy('id','desc')->first()->update(['states_payment'=>1]);
            $notification_gobi = array(
                'title' => 'Féliciations',
                'sending' => "Votre contribution est parvenue avec succès. Merci pour votre contribution au sein de la société.",
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
