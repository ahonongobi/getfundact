<?php

namespace App\Http\Controllers;

use App\Models\Campagne;
use App\Models\Contrubution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function view(){
        return view('about');
    }
    public function viewSeparate($email){
        return view('separeta',compact('email'));
    }
    public function indexUserDash(){
        return view('user_dash.index');
    }

    public function indexCampagne(){
        return view('user_dash.campagne');
    }
    public function profile(){
        return view('user_dash.profile');
    }

    public function myCampagne(){
        return view('user_dash/my-campagne');
    }
    public function viewSeparateFinale($type,$email){
                 if ($type=='particulier') {
                    DB::update("UPDATE users SET user_type=? WHERE email=?",[
                      'Particulier',$email
                    ]);

                    return redirect('/my_space_social');
                 } else {
                    DB::update("UPDATE users SET user_type=? WHERE email=?",[
                        'Organisation',$email
                      ]);
                      return redirect('/my_org_social');
                 }
                 
    }

    public function donationDetails($id,$name){
        $count_contribution=Contrubution::where('id_campagnes',$id)->count();
        $count_contribution_amount= Contrubution::where('id_campagnes',$id)->sum('montant');
        $details = Campagne::where('id',$id)->first();
        $contributeur = Contrubution::where('id_campagnes',$id)->get();
        return view('user_dash.donation-details',compact('details','contributeur','count_contribution','count_contribution_amount'));
    }
    public function donationDetailsOrg($id,$name){
        $details = Campagne::where('id',$id)->first();
        $count_contribution_for_you = Contrubution::where('id_author',Auth::user()->id)->count();
        $contributeur = Contrubution::where('id_campagnes',$id)->get();

        return view('invest_dash.donation-details',compact('details','contributeur','count_contribution_for_you'));
    }

    public function contributions(){
        return view('user_dash.contribution');
    }
}
