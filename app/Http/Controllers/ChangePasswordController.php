<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function updatePassword(Request $request){
        $request->validate([
            'password'=> 'required',
            'new_password' => 'required','min:6',
            //'c_password' => 'min:6',


        ]);
         $userHashedPasword = User::find(Auth::user()->id)->password;
        if (Hash::check($request->password,$userHashedPasword)) {
            $update = User::findorFail(Auth::user()->id)->update([
                'password' => bcrypt($request->new_password),
            ]);
            if($update)
            {
                $notification_gobi = array(
                    'title' => 'Félicitations',
                    'sending' => 'Mot de Passe modifié avec succès',
                    'type' => 'success',
            
                    );
                    return back()->with($notification_gobi);
            }
     
        }
        
        else{
            $notification_gobi = array(
                'title' => 'Desolé',
                'sending' => "Fausse tentative de mot de passe. votre compte risque d'être bloqué",
                'type' => 'warning',
        
                );
                return back()->with($notification_gobi);
        }
    }
}
