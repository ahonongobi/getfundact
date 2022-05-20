<?php

namespace App\Http\Controllers;

use App\Models\Campagne;
use App\Models\Contrubution;
use App\Models\Profile;
use App\Models\User;
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
        $checkIfuserAccountIsValid = User::where('email',Auth::user()->email)->first();
        if ($checkIfuserAccountIsValid->states == 0) {
            $alertMessage = "KYC: Votre compte est désactivé ou inactif, veuillez contacter l'administrateur ou remplissez  les informations complémentaires de votre profil";
        } 
        
        $checkIfUserAccountIsComplet = Profile::where('email',Auth::user()->email)->count();
        if ($checkIfUserAccountIsComplet==0 OR $checkIfuserAccountIsValid->states == 0) {
            $notification_2 = 'Votre compte est encore imcomplet, veuillez  renseignez les informations complémentaires de votre profil !!!';
            $alertMessage = "KYC: Votre compte est désactivé ou inactif, veuillez contacter l'administrateur ou remplissez les informations complémentaires de votre profil.";
            return view('user_dash.index',compact('notification_2','alertMessage'));
        } else {
            //$alertMessage = "KYC: Votre compte est désactivé ou inactif, veuillez contacter l'administrateur ou remplissez les informations complémentaires de votre profil.";
            $notification_2 = 'Chèr(e) utilisateurs, soyez les bienvenues sur getfundact.com !!!';
            return view('user_dash.index',compact('notification_2'));
        }
        

        
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
        $contributeur = Contrubution::where('id_campagnes',$id)->where('states_payment',1)->paginate(10);
        $contributeur_count = Contrubution::where('id_campagnes',$id)->where('states_payment',1)->count();
        return view('user_dash.donation-details',compact('details','contributeur','count_contribution','count_contribution_amount','contributeur_count'));
    }
    public function donationDetailsOrg($id,$name){
        $details = Campagne::where('id',$id)->first();
        $count_contribution_for_you = Contrubution::where('id_author',Auth::user()->id)->where('states_payment',1)->count();
        $contributeur = Contrubution::where('id_campagnes',$id)->paginate();

        return view('invest_dash.donation-details',compact('details','contributeur','count_contribution_for_you'));
    }

    public function contributions(){
        return view('user_dash.contribution');
    }
}
