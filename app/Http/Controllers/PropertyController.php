<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;
use App\Models\Category;
use DB;

class PropertyController extends Controller
{

// shows all propertis with the propertyType id in variable
    public function show( $propertyTypeId){
        // dd('hi');
        $data = [];

        $propertyData = category::findorFail($propertyTypeId);
        $properties = property::where('category_id',$propertyTypeId)->simplePaginate(8);

        array_push($data,['propertyData'=>$propertyData,'properties' => $properties]);
        if(empty($data)){
            dd('empty');
        }else{
            // dd($data);

         return view('property.show',['data'=>$data]);
        }
    }
    //   shows a single property
    public function showoneproperty($id){
        $property = property::findorFail($id);
        return view('property.showsingleproperty',['property'=>$property]);
        // return $property;
    }
    public function create($propertyTypeId){

        $propertyType = category::findorFail($propertyTypeId);
       return view('property.create',['propertyType'=>$propertyType]);
    }


    public function myproperties(){
        return view('property.myproperties');
    }

    public function viewPageshow($id){


       $data = [];
       $property = property::findorFail($id);
       $propertyOption = $property->option;

       $location = $property->location;
       $city = $location->city;
       $country = $city->country;

       array_push($data,
              [
              'property'=>$property,
              'location'=>$location,
              'city'=>$city,
              'country'=>$country,
              'propertyOption'=>$propertyOption,

            ]);


         if(empty($data)){
             dd('empty');
         }else{


            return view('property.viewPageshow',['data'=>$data]);

         }






    }








}
