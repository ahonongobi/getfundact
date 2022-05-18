<?php

namespace App\Http\Controllers;

use App\Models\Campagne;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $search = $request->search;
        $campagnes = Campagne::where('categories', 'like', '%'.$search.'%')
                       ->orWhere('name', 'like', '%'.$search.'%')
                        ->orWhere('details', 'like', '%'.$search.'%')
                        ->orWhere('keys_word', 'like', '%'.$search.'%')
                        ->paginate(12);
        return view('campagnes', compact('campagnes'));

    }
}
