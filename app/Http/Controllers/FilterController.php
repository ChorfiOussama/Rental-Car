<?php

namespace App\Http\Controllers;
use App\Models\Voiture;

use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filter(Request $request){
        $libele=$request->input('libele');
        $voitures=Voiture::where('marque','like',$libele)->get();
        return view('voitures.index',compact("voitures"));

    }
}
