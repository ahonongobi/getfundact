<?php

namespace App\Http\Controllers;

use App\Models\Campagne;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JuryController extends Controller
{
    public function ValidatePost($id){
      $user = User::where('id',$id)->first();
      DB::update("UPDATE users SET states=? WHERE id=?",[
          1,$id
      ]);
      return back()->with('success','utlisateur activé avec succès!!!');
    }
    public function unvalidatePost($id){
        $user = User::where('id',$id)->first();
        DB::update("UPDATE users SET states=? WHERE id=?",[
            0,$id
        ]);
        return back()->with('success','utlisateur désactivé avec succès!!!');
      }

      public function deleteUser($id){
        $user = User::where('id',$id)->first();
        DB::update("UPDATE users SET states=? WHERE id=?",[
            2,$id
        ]);
        return back()->with('success','utlisateur désactivé avec succès!!!');
      }


      //campagne
      public function validateCampagne($id){
        $user = Campagne::where('id',$id)->first();
        DB::update("UPDATE campagnes SET statut=? WHERE id=?",[
            1,$id
        ]);
        return back()->with('success','Campagne validée avec succès!!!');
      }

      public function unvalidateCampagne($id){
        $user = Campagne::where('id',$id)->first();
        DB::update("UPDATE campagnes SET statut=? WHERE id=?",[
            0,$id
        ]);
        return back()->with('success','Campagnes désactivée avec succès!!!');
      }
     
}
