<?php

namespace App\Http\Controllers;

use App\Models\Pourcentage;
use Illuminate\Http\Request;

class PourcentageController extends Controller
{
    //send data to database percenrage and message  using Pourcentage Model
    public function percentagePost(Request $request){
        $pourcentage = new Pourcentage();
        $pourcentage->pourcentage = $request->pourcentage;
        $pourcentage->message = $request->message ?? 'Aucun message pour le moment';
        $pourcentage->email = auth()->user()->email;
        $pourcentage->save();
        $notification_gobi = array(
            'title' => 'Succès',
            'sending' => "Le pourcentage a été ajouté avec succès",
            'type' => 'success',
    
        );
        return back()->with($notification_gobi);
    }

    //delete data from database percenrage and message  using Pourcentage Model
    public function percentageDelete($id){
        $pourcentage = Pourcentage::find($id);
        $pourcentage->delete();
        $notification_gobi = array(
            'title' => 'Succès',
            'sending' => "Le pourcentage a été supprimé avec succès",
            'type' => 'success',
    
        );
        return back()->with($notification_gobi);
    }
}
