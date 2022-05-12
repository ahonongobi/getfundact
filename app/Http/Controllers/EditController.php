<?php

namespace App\Http\Controllers;

use App\Models\Campagne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
    public function edit($id){
        $item =  Campagne::where('id',$id)->first();
        return view('user_dash.edit',compact('item'));
    }


    public function editPost(Request $request, $id){
        
       $request->validate([
          'categories' => 'required',
          'name' => "required",
          'duree' => "required",
          'monnaie' => "required",
          'montant_v' => "required",
          'name_b' => "required",
          "name_b"=>'required',
          "where" => 'required',
          'details' => 'required',
          'details_ojectifs' => 'required',
          'detail_budget'=>'required',
          "details_budget_en" => 'required',
       ]);
       $add_campagne = Campagne::where('id',$id)->first();
       //find($id)

       $add_campagne->user_id = Auth::user()->id;
       $add_campagne->categories = $request->categories;
       $add_campagne->name = $request->name;
       $add_campagne->duree = $request->duree;
       $add_campagne->monnaie = $request->monnaie;
       $add_campagne->montant_v = $request->montant_v;
       $add_campagne->name_b = $request->name_b;
       $add_campagne->where = $request->where;
       $add_campagne->details = $request->details;
       $add_campagne->details_ojectifs = $request->details_ojectifs;
       $add_campagne->keys_word = $request->keys_word;
       $add_campagne->video = $request->video;


       $add_campagne->siteweb = $request->siteweb;
       $add_campagne->hashtag = $request->hashtag;
       $add_campagne->detail_budget = $request->detail_budget;
       $add_campagne->Details_budget_en = $request->details_budget_en;
       
       if (empty($request->hidden_cash)) {
        $add_campagne->hidden_cash = 0;

       } else {
        $add_campagne->hidden_cash = $request->hidden_cash;

       }
       
       $add_campagne->montant_cotise = $request->montant_cotisé;
       if($request->hasFile('file_vignette'))
        {
            $file1 = $request->file('file_vignette');
            //$file2 = $request->file('file_couverture');
           
            
    
    
            $filename1 = 2*time().'.'.$file1->getClientOriginalExtension();
            //$filename2 = 3*time().'.'.$file2->getClientOriginalExtension();
            $path = public_path().'/storage/UserDocument/';
            
            $file1->move($path,$filename1);
            //$file2->move($path,$filename2);
            
            if (!empty($request->file('file_vignette'))) {
                $add_campagne->file_vignette = $filename1;
            } else {
                # code...
            }

            
            
            
        }

        if(empty($request->file('file_couverture'))) {
           //
        }
        if(empty($request->file('file_vignette'))) {
            //
         }
        if($request->hasFile('file_couverture'))
        {
            //$file1 = $request->file('file_vignette');
            $file2 = $request->file('file_couverture');
           
            
    
    
           // $filename1 = 2*time().'.'.$file1->getClientOriginalExtension();
            $filename2 = 3*time().'.'.$file2->getClientOriginalExtension();
            $path = public_path().'/storage/UserDocument/';
            
            //$file1->move($path,$filename1);
            $file2->move($path,$filename2);
            
            

            if (!empty($request->file('file_couverture'))) {
                $add_campagne->file_couverture = $filename2;
            } else {
                //
            }
            
            
        }

        //end file 2

     
        if ($add_campagne->update()) {


                
            $notification_gobi = array(
            'title' => 'Félicitations',
            'sending' => 'Les informations de la campagne ont été modifiée avec succès.',
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
