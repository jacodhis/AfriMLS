<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;
use App\Models\Category;
use DB;

class PropertyController extends Controller
{

    public function show( $propertyTypeId){
        $data = [];
        // $properties  = category::findorFail($propertyTypeId)->properties;
        $propertyData = category::findorFail($propertyTypeId);
        $properties = property::where('category_id',$propertyTypeId)->simplePaginate(8);

        array_push($data,['propertyData'=>$propertyData,'properties' => $properties]);
        if(empty($data)){
            dd('empty');
        }else{

         return view('property.show',['data'=>$data]);
        }
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
       $feautures = $property->feautures;
       $location = $property->location;
       $city = $location->city;
       $country = $city->country;
       $descriptions = $property->descriptions;

       array_push($data,
              [
              'property'=>$property,
              'location'=>$location,
              'city'=>$city,
              'country'=>$country,
              'feautures'=>$feautures,
              'propertyOption'=>$propertyOption,
              'descriptions' => $descriptions
            ]);


         if(empty($data)){
             dd('empty');
         }else{
        //    dd($data);
            return view('property.viewPageshow',['data'=>$data]);

         }






    }








}
