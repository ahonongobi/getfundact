<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecureProtocolController extends Controller
{
    public function index(){
        return view('admin.secure-protocol');
    }
    //post function to verify if $request value is equal to  session value code
    public function codeVerification(Request $request){
        if($request->code == session()->get('code')){
            return redirect('/dashboard-interface');
            //forget session code
            session()->forget('code');
        }else{
            $notification_gobi = array(
                'title' => 'Désolé',
                'sending' => "Le code ne correspond pas. Pour des raisons de sécurité, nous vous informons d'éviter de fausses tentatives. !!!.",
                'type' => 'warning',
        
                );
                //forget session code
                session()->forget('code');
            return redirect('/login')->with($notification_gobi);
            //return redirect('/secure-protocol');
        }
    }
}
