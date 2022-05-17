<?php

namespace App\Http\Controllers;

use App\Models\Campagne;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function index2(){
        return view('admin.index-1');
    }

    public function withdarwalView(){
        return view('admin.withdarwal');
        
    }

    public function campagnes_actif(){
        return view('admin.campagnes-actif');
    }

    public function campagnes_inactif(){
        return view('admin.campagnes-inactif');
    }
    public function users(){
        return view('admin.users');
    }

    public function see($id){
        $users = Profile::where('user_id',$id)->first();
        $usersCount = Profile::where('user_id',$id)->count();
        $hisCampagnes = Campagne::where('user_id',$id)->get();
        //check user solde on model User
        $user = User::where('id',$id)->first();
        $user_solde = $user->solde;
        //last login using carbone libray on model User model updated_at
        $lastLogin = $user->updated_at;



        return view('admin.see-more',compact('users','hisCampagnes','usersCount','user_solde','lastLogin'));
    }
    
    
    public function seeMoreCampagne($id){
        
        $campagnePost = Campagne::where('id',$id)->first();
       // dd($campagnes);
        return view('admin.see-more-campagne',compact('campagnePost'));
    }

    public function search(Request $request){
        $searchs = User::where("email", "LIKE" ,'%'.$request->input("search").'%')
        ->orWhere("name", "LIKE" ,'%'.$request->input("search").'%')->orWhere("surname", "LIKE" ,'%'.$request->input("search").'%')->orWhere("user_type", "LIKE" ,'%'.$request->input("search").'%')->paginate(40);
        return view('admin.search', compact('searchs'));
    }
}
