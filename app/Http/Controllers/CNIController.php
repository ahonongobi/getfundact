<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CNIController extends Controller
{
    public function sendCNI(Request $request){
        $request->validate([
            'file'=> 'required',
            'file2' => 'required','min:6','image',
            //'c_password' => 'min:6',
        ]);
        
        if($request->hasFile('file'))
        {
            $file1 = $request->file('file');
            $file2 = $request->file('file2');
           
            
    
            //$collection = collect([1, 2, 3, 4, 5, ]);
    
            $filename1 = 2*time().'.'.$file1->getClientOriginalExtension();
            $filename2 = 3*time().'.'.$file2->getClientOriginalExtension();
            //make($file1)->save(public_path('/storage/actuality_photos/' .$filename1));
            $path = public_path().'/storage/UserDocument/';
            
            $file1->move($path,$filename1);
            $file2->move($path,$filename2);
            //$file1->move_uploaded_file($filename1,$path);
            $send = Profile::where('user_id', Auth::user()->id)->update(
                [
                    'cni' => $filename1,'s_cni' => $filename2,
                ]
            );
            
            
            if ($send) {
                $notification_gobi = array(
                    'title' => 'Félicitations',
                    'sending' => 'Les documents ont été enrégistré ave succès.',
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
}
