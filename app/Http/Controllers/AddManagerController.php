<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AddManagerController extends Controller
{
    // method addManager to user table : name , surrname, email
    public function addManager(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        //generate 6 digit random number
        $password = rand(100000,999999);
        $user->password = bcrypt($password);
        $user->user_type = 'manager';
        //send this 6 digit random number to user email
        
        $user->save();
    }
}
