<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Property;
use App\Models\County;
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
         $data['getSearchParams'] = self::getSearchParams();
         return view('pages.home',  ['data' => $data]);
    }

    public function search(Request $request) {


        $properties = Property::where([
             ['county_id', '=', $request->county_id],
             ['property_type', '=', $request->property_type],
             ['category', '=', $request->category],
            ]
         )->get();

        $data['properties'] = $properties;
        $getSearchParams = self::getSearchParams();

        $data['getSearchParams'] = $getSearchParams;


        $county = County::where('id','=',$request->county_id)->first();

        $data['search_property_type'] = $getSearchParams['property_types'][$request->property_type];
        $data['search_county'] = ucwords(strtolower($county->name));
        $data['search_category'] = $getSearchParams['categories'][$request->category];

        return view('pages.search-results',  ['data' => $data]);
    }


    public function contactPage(){
        return view('pages.contactpage');
    }
    public function aboutUs(){
        return view('pages.aboutUs');
    }

    public static function getSearchParams() {
         $return['counties'] = County::get(['id','name']);
         $return['property_types'] = config('settings.property_types');
         $return['categories'] = config('settings.categories');
         return $return;
    }

}
