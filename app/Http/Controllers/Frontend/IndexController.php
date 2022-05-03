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
     
        
        // $cities = city::inRandomOrder()->limit(5) ->get(); //goesToSearch

        $properties = property::query()
                                ->where('is_feautured','=','yes')
                                ->latest()
                                ->inRandomOrder()->paginate(20);

       array_push($data,[
           'properties'=>$properties,
        ]);
       if(!empty($data)){
        return view('pages.index',['data'=>$data]);
       }

       return redirect('/');


    }


    public function contactPage(){
        return view('pages.contactpage');
    }
    public function aboutUs(){
        return view('pages.aboutUs');
    }


}
