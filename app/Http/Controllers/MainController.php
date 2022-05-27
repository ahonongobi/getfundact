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
        $simpleString = $id;
        $ciphering = 'AES-128-CTR';
        $iv_lenght = openssl_cipher_iv_length($ciphering);
        $option = 0;
        $decryption_iv = '1234567891011121';
        $decryption_key = 'abyssinie';
        $decryption = openssl_decrypt($id,$ciphering,$decryption_key,$option,$decryption_iv);
        //go to profile table and get the email,photo,nom_prenoms based on id  on model Profile
        $profile = Profile::where('id',$decryption)->first();

        $count_contribution=Contrubution::where('id_campagnes',$decryption)->count();
        $count_contribution_amount= Contrubution::where('id_campagnes',$decryption)->sum('montant');
        $details = Campagne::where('id',$decryption)->first();
        $contributeur = Contrubution::where('id_campagnes',$decryption)->where('states_payment',1)->paginate(10);
        $contributeur_count = Contrubution::where('id_campagnes',$decryption)->where('states_payment',1)->count();
        
        $contributeur_message = Contrubution::orderBy('id','DESC')->where('id_campagnes',$decryption)->where('message','!=',null)->where('states_payment',1)->get();
        return view('user_dash.donation-details',compact('details','contributeur','count_contribution','count_contribution_amount','contributeur_count','contributeur_message','simpleString','profile','name'));
    }
    //donationDetailsWithoutName 
    public function donationDetailsWithoutName ($id){
        $count_contribution=Contrubution::where('id_secret_campagne',$id)->count();
        $count_contribution_amount= Contrubution::where('id_secret_campagne',$id)->sum('montant');
        $details = Campagne::where('id_secret',$id)->first();
        $contributeur = Contrubution::where('id_secret_campagne',$id)->where('states_payment',1)->paginate(10);
        $contributeur_count = Contrubution::where('id_secret_campagne',$id)->where('states_payment',1)->count();
        //select contributeur message where states_payment = 1, id_campagne = id , message is not null
        $contributeur_message = Contrubution::where('id_secret_campagne',$id)->where('message','!=',null)->where('states_payment',1)->get();

        return view('user_dash.donation-details',compact('details','contributeur','count_contribution','count_contribution_amount','contributeur_count','contributeur_message'));
    }
    public function donationDetailsOrg($id,$name){
        $details = Campagne::where('id',$id)->first();
        $count_contribution_for_you = Contrubution::where('id_author',Auth::user()->id)->where('states_payment',1)->count();
        $contributeur = Contrubution::where('id_campagnes',$id)->where('states_payment',1)->paginate(10);
        $contributeur_count = Contrubution::where('id_campagnes',$id)->where('states_payment',1)->count();
        $contributeur_message = Contrubution::where('id_campagnes',$id)->where('message','!=',null)->where('states_payment',1)->get();
        return view('invest_dash.donation-details',compact('details','contributeur','count_contribution_for_you','contributeur_count','contributeur_message'));
    }

    public function contributions(){
        return view('user_dash.contribution');
    }
}
