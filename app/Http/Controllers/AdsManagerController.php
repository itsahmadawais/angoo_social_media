<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdsManagerController extends Controller
{
    public function create(){
        return view('frontend.ads.create');
    }
}
