<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;
use App\Models\Category;
use DB;

class PropertyController extends Controller
{

    public function properties(){
        $data = [];

        $categories = Category::get();
        $properties = Property::get();


        array_push($data,['categories'=>$categories,'properties'=>$properties]);

        if(empty($data)){
            echo "empty";
        }else{
            return view('property.properties',['data'=>$data]);
        }


    }

    public function addProperty(){
        return view('property.addproperty');
    }

    public function myproperties(){
        return view('property.myproperties');
    }

    public function show($id){

        $data = [];

       $property = property::findorFail($id);

       $propertyOption = $property->option;
       $feautures = $property->feautures;
       $location = $property->location;
       $city = $location->city;
       $country = $city->country;

       array_push($data,
              [
              'property'=>$property,
              'location'=>$location,
              'city'=>$city,
              'country'=>$country,
              'feautures'=>$feautures,
              'propertyOption'=>$propertyOption,
            ]);


         if(empty($data)){
             dd('empty');
         }else{
        //    dd($data);
            return view('property.show',['data'=>$data]);

         }






    }








}
