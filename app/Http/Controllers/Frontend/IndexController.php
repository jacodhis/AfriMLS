<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\property;
use App\Models\county;
use App\Models\country;
use App\Models\category;
use App\Models\city;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
     public function landingPage(){

        $data = [];
        $properties = property::where('is_feautured','=','yes')->take(12)->orderBy('created_at','desc')->get();
        array_push($data,[
            'properties'=>$properties,
            ]);
       if(!empty($data)){
        return view('pages.index',['data'=>$data]);
       }

       return redirect('/');
    }

    //newlandingPage
    public function newlandingPage(){

        $data = [];
        $properties = property::where('is_feautured','=','yes')->take(12)->orderBy('created_at','desc')->get();
        array_push($data,[
            'properties'=>$properties,
        ]);
        if(!empty($data)){
            return view('pages.newindex',['data'=>$data]);
        }

        return redirect('/');
    }

    public function home() {
        return view('pages.home');
    }


    public function contactPage(){
        return view('pages.contactpage');
    }
    public function aboutUs(){
        return view('pages.aboutUs');
    }


}
