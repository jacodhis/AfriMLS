<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;
use App\Models\county;
use App\Models\country;
use App\Models\category;
use App\Models\city;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function landingPage(){

        $data = [];
        $options = DB::table('options')->select(['id','name'])->get();//goes to search
        $counties = county::inRandomOrder()->limit(5)->get();//goes to search
        // dd($counties);

        // $countries = country::where('id',109)
        //                    ->orWhere('id',225)
        //                    ->orWhere('id',213)
        //                    ->orWhere('id',79)
        //                    ->orWhere('id',5)
        //                    ->get();
        // dd($countries);
        $cities = city::inRandomOrder()->limit(5) ->get(); //goesToSearch

        $properties = property::query()
                                ->where('is_feautured','=','yes')
                                ->latest()
                                ->inRandomOrder()->simplePaginate(12);

       $categories = category::get();

       array_push($data,[
           'properties'=>$properties,
           'counties' => $counties,
           'cities' => $cities,
        //    'countries' => $countries,
           'categories' =>$categories,
           'options' =>$options
        ]);
       if(!empty($data)){
        return view('pages.index',['data'=>$data]);
       }
       return ;


    }


    public function contactPage(){
        return view('pages.contactpage');
    }
    public function aboutUs(){
        return view('pages.aboutUs');
    }






}
