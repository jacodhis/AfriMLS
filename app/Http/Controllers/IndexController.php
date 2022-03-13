<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;
use App\Models\county;
use App\Models\country;
use App\Models\category;
use App\Models\city;
use DB;

class IndexController extends Controller
{
    public function landingPage(){

        $data = [];
        $options = DB::table('options')->select(['id','name'])->get();//goes to search
        // $countries = country::inRandomOrder()->limit(5) ->get();//goes to search
        $countries = country::where('id',109)
                           ->orWhere('id',225)
                           ->orWhere('id',213)
                           ->orWhere('id',79)
                           ->orWhere('id',5)
                           ->get();
        // dd($countries);
        $cities = city::inRandomOrder()->limit(5) ->get();


        $properties = property::inRandomOrder()->take(9)->get();
        //    dd($properties);
        //    $counties = county::get();


       $categories = category::get();

       array_push($data,[
           'properties'=>$properties,
        //    'counties' => $counties,
           'cities' => $cities,
           'countries' => $countries,
           'categories' =>$categories,
           'options' =>$options
        ]);


       if(empty($data)){
           dd('empty');
           //echo default landing page
        //    return view('pages.index',['properties'=>$properties]);
       }else{
        //    dd($data);

        return view('pages.index',['data'=>$data]);
       }

    }


    public function contactPage(){
        return view('pages.contactpage');
    }
    public function aboutUs(){
        return view('pages.aboutUs');
    }






}
