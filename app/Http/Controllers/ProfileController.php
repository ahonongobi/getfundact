<?php

namespace App\Http\Controllers;

use App\Mail\CampagneACtive;
use App\Mail\LetMeKnow;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ProfileController extends Controller
{
    public function addProfile(Request $request)
    {
        $request->validate([
            'nom_prenoms' => 'required',
            'date_naissance' => 'required',
            'nationanlite' => 'required',
            'pays' => 'required',
            'email' => 'required',
            'tel' => 'required',
            // 'file' => ['required', 'image'],
        ]);
        $checkIfuserAlreadyCompleteProfile = Profile::where('email', $request->email)->count();
        //$checkIfuserAlreadyCompleteProfileEmail = Profile::where('email',$request->email)->first();

        if ($checkIfuserAlreadyCompleteProfile == 0) {
            $send = new Profile();

            $send->user_id = Auth::user()->id;
            $send->nom_prenoms = $request->nom_prenoms;
            $send->date_naissance = $request->date_naissance;
            $send->nationanlite = $request->nationanlite;
            $send->pays = $request->pays;
            $send->email = $request->email;
            $send->tel = $request->tel;

            if ($request->hasFile('file')) {
                $file1 = $request->file('file');



                //$collection = collect([1, 2, 3, 4, 5, ]);

                $filename1 = 2 * time() . '.' . $file1->getClientOriginalExtension();
                //make($file1)->save(public_path('/storage/actuality_photos/' .$filename1));
                $path = public_path().'/storage/UserDocument/';

                $file1->move($path, $filename1);
                //$file1->move_uploaded_file($filename1,$path);
                $send->photo = $filename1;
            
                if ($send->save()) {
                
                //send mail to user that his account has been verified
                //start
                $user = User::where('email', Auth::user()->email)->first();
                DB::update("UPDATE users SET states=? WHERE email=?",[
                    1,Auth::user()->email
                ]);
                $email = Auth::user()->email;
                $name = Auth::user()->name;
                $message = "Votre compte a ??t?? valid?? avec succ??s. Vous pouvez d??sormais vous connecter sur getfundact.com et cr??er votre campagne.";
                $mailable = new CampagneACtive($name,$email,$message);
                Mail::to($email)->send($mailable);
                //end 
                    // notify admin at getfundaction@gmail.com
                $message2 = "Ceci est un message pour vous informer qu'un nouveau utilisateur a rempli son profil".(Auth::user()->name)." Veuillez v??rifier les d??tails de la personne.";
				$mailable2 = new LetMeKnow(Auth::user()->name,Auth::user()->email,$message2);
				Mail::to('getfundaction@gmail.com')->send($mailable2);
				// end notify admin at getfundaction@gmail.com
                    $notification_gobi = array(
                        'title' => 'F??licitations',
                        'sending' => 'Les informations du profil enr??gistr??es ave succ??s.',
                        'type' => 'success',

                    );
                    return back()->with($notification_gobi);
                } else {
                    $notification_gobi = array(
                        'title' => 'Desol??',
                        'sending' => 'Une erreur',
                        'type' => 'warning',

                    );
                    return back()->with($notification_gobi);
                }
            } else {
                $send->photo = "avatar7.png";
                //send mail to user that his account has been verified
                $user = User::where('email', Auth::user()->email)->first();
                DB::update("UPDATE users SET states=? WHERE email=?",[
                    1,Auth::user()->email
                ]);
                $email = Auth::user()->email;
                $name = Auth::user()->name;
                $message = "Votre compte a ??t?? valid?? avec succ??s. Vous pouvez d??sormais vous connecter sur getfundact.com et cr??er votre campagne.";
                $mailable = new CampagneACtive($name,$email,$message);
                Mail::to($email)->send($mailable);
                //stocked in userDocument folder
                // notify admin at getfundaction@gmail.com
                $message2 = "Ceci est un message pour vous informer qu'un nouveau utilisateur a rempli son profil(".(Auth::user()->email).") Veuillez v??rifier les d??tails de la personne.";
				$mailable2 = new LetMeKnow(Auth::user()->name,Auth::user()->email,$message2);
				Mail::to('getfundaction@gmail.com')->send($mailable2);
                // send admin at getfundaction@gmail.com
                

                if ($send->save()) {
                    $notification_gobi = array(
                        'title' => 'F??licitations',
                        'sending' => 'Les informations du profil enr??gistr??es ave succ??s.',
                        'type' => 'success',

                    );
                    return back()->with($notification_gobi);
                } else {
                    $notification_gobi = array(
                        'title' => 'Desol??',
                        'sending' => 'Une erreur',
                        'type' => 'warning',

                    );
                    return back()->with($notification_gobi);
                }
            }
        } else {
            $send = Profile::where('email', $request->email)->first();

            $send->user_id = Auth::user()->id;
            $send->nom_prenoms = $request->nom_prenoms;
            $send->date_naissance = $request->date_naissance;
            $send->nationanlite = $request->nationanlite;
            $send->pays = $request->pays;
            $send->email = $request->email;
            $send->tel = $request->tel;

            if ($request->hasFile('file')) {
                $file1 = $request->file('file');



                //$collection = collect([1, 2, 3, 4, 5, ]);

                $filename1 = 2 * time() . '.' . $file1->getClientOriginalExtension();
                //make($file1)->save(public_path('/storage/actuality_photos/' .$filename1));
                $path = public_path().'/storage/UserDocument/';

                $file1->move($path, $filename1);
                //$file1->move_uploaded_file($filename1,$path);
                $send->photo = $filename1;

                if ($send->update()) {
                    // notify admin at getfundaction@gmail.com
                $message2 = "Ceci est un message pour vous informer qu'un nouveau utilisateur a rempli son profil".(Auth::user()->name)." Veuillez v??rifier les d??tails de la personne.";
				$mailable2 = new LetMeKnow(Auth::user()->name,Auth::user()->email,$message2);
				Mail::to('getfundaction@gmail.com')->send($mailable2);
                    $notification_gobi = array(
                        'title' => 'F??licitations',
                        'sending' => 'Les informations du profil enr??gistr??es avec succ??s.',
                        'type' => 'success',

                    );
                    return back()->with($notification_gobi);
                } else {
                    $notification_gobi = array(
                        'title' => 'Desol??',
                        'sending' => 'Une erreur',
                        'type' => 'warning',

                    );
                    return back()->with($notification_gobi);
                }
            } else {
                if ($send->save()) {
                    // notify admin at getfundaction@gmail.com
                $message2 = "Ceci est un message pour vous informer qu'un nouveau utilisateur a rempli son profil(".(Auth::user()->email).") Veuillez v??rifier les d??tails de la personne.";
				$mailable2 = new LetMeKnow(Auth::user()->name,Auth::user()->email,$message2);
				Mail::to('getfundaction@gmail.com')->send($mailable2);
                // send admin at getfundaction@gmail.com
                    $notification_gobi = array(
                        'title' => 'F??licitations',
                        'sending' => 'Les informations du profil enr??gistr??es avec succ??s.',
                        'type' => 'success',

                    );
                    return back()->with($notification_gobi);
                } else {
                    $notification_gobi = array(
                        'title' => 'Desol??',
                        'sending' => 'Une erreur',
                        'type' => 'warning',

                    );
                    return back()->with($notification_gobi);
                }
            }
        }
    }
}
