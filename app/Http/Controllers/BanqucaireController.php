<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BanqucaireController extends Controller
{
    public function addBancaire(Request $request){
        $request->validate([
            'votre_addresse' => 'required',
            'ville' => 'required',
            'region' => 'required',
            'code_postal' => 'required',
            'numero_compte' => 'required',
            'numero_institution' => 'required',
            'iban'=> ['required'],
            'bic'=> ['required'],
            'nom_banque'=> ['required'],
            'code_agence'=> ['required'],
        ]);
        $send = Profile::where('user_id', Auth::user()->id)->update(
            [
                'votre_addresse' => $request->votre_addresse,
                'votre_addresse' => $request->votre_addresse,
                'ville' => $request->ville,
                'region' => $request->region,
                'code_postal' => $request->code_postal,
                'numero_compte' => $request->numero_compte,
                'numero_institution' => $request->numero_institution,
                'iban' => $request->iban,
                'bic' => $request->bic,
                'nom_banque' => $request->nom_banque,
                'code_agence' => $request->code_agence,
            ]
        );

        
        
      
        if ($send) {
            $notification_gobi = array(
            'title' => 'Félicitations',
            'sending' => 'Les informations du profile enrégistré ave succès.',
            'type' => 'success',
    
            );
            return back()->with($notification_gobi);
        } else {
            $notification_gobi = array(
            'title' => 'Desolé',
            'sending' => 'Une erreur',
            'type' => 'warning',
    
            );
            return back()->with($notification_gobi);
        }
    }
}
