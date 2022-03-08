<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function landingPage(){
        return view('index');
    }

    public function addProperty(){
        return view('addproperty');
    }

    public function contactPage(){
        return view('contactpage');
    }
    public function aboutUs(){
        return view('aboutUs');
    }

}
