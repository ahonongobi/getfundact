<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecureProtocolController extends Controller
{
    public function index(){
        return view('admin.secure-protocol');
    }
    //post function to verify if $request value is equal to  session value code
    public function codeVerification(Request $request){
        if($request->code == session()->get('code')){
            // return according to the user role: Admin, Particulier or Organisation
            session()->forget('code');
            if (Auth::user()->user_type == "Personne") {
                return redirect('/my_space');
            } elseif(Auth::user()->user_type == "Organisation") {
                return redirect('/my_org');
            } elseif(Auth::user()->user_type == "Admin" || Auth::user()->user_type == "manager") {
                return redirect('/dashboard-interface');
            }
            //forget session code
            
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
