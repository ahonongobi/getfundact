<?php

namespace App\Http\Controllers;

use App\Models\Campagne;
use Illuminate\Http\Request;

class OrgController extends Controller
{
    public function index(){
        return view('invest_dash.index');
    }
    public function profileOrg(){
        return view('invest_dash.profile-org');
    }

    public function contributionsOrg(){
        return view('invest_dash/contribution-org');
    }

    public function mycampagneOrg(){
        return view('invest_dash/campagne-org');
    }

    public function campagneCategoryOrg($campagnes){
        $campagnesorg = Campagne::where('categories', $campagnes)->where('statut',1)->paginate(12);
        return view('invest_dash/category', compact('campagnesorg'));
    }
}
