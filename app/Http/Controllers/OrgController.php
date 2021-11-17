<?php

namespace App\Http\Controllers;

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
}
