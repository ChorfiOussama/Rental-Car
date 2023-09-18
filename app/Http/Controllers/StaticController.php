<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function home() {
        return view('voitures.home');
    }
    public function condition() {
        return view('voitures.condition');
    }
   
    public function contact() {
        return view('voitures.contact');
    }
}
