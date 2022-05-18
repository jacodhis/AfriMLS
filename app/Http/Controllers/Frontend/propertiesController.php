<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\property;

use App\Models\feauture_community;
use App\Models\exterior_feauture;
use App\Models\garage_feauture;
use App\Models\utility_data;

class propertiesController extends Controller
{
    //
    public function showNavForSale($id){

        $properties = property::where('category_id',$id)
                               ->where('option_id',3)->latest()->paginate(20);
                              
           if($properties->isEmpty()){
               return redirect('/');
          }
           return view('frontend.properties',compact('properties'));
    }
      public function showNavForent($id){
        $properties = property::where('category_id',$id)
                               ->where('option_id',1)->latest()->paginate(20);
        if($properties->isEmpty()){
               return redirect('/');
          }
           return view('frontend.properties',compact('properties'));
    }
  
     public function viewPageshow($id){
       $data = [];
       $property = property::findorFail($id);

       //feautured properties
       $feautured_properties = property::where('is_feautured','yes')->inRandomOrder()->take(3)->get();
    //    dd($feautured_properties);

       $similar_properties = [];
        $similars_p = property::where('category_id',$property->category_id)->get();
        foreach($similars_p as $similar_p){
            array_push($similar_properties,['similar_props'=>$similar_p]);
        }
        // dd($similar_properties);


       //community feautures fetch
       $cfs = $property->community_feautures;
       $feauture_communities = [];
       foreach($cfs as $c_f){
          $f_commuities = feauture_community::where('id',$c_f->community_feauture_id)->get();
         array_push($feauture_communities,['real_c_feautures'=>$f_commuities]);
       }
      //exterior feautes fetch
       $exterior_feautures = [];
       $ext_fs = $property->exterior_property_feautures;
       foreach($ext_fs as $ext_f){
        $f_commuities = exterior_feauture::where('id',$ext_f->exterior_feauture_id)->get();
       array_push($exterior_feautures,['real_ext_feautures'=>$f_commuities]);
     }
     //garage feautures data fetch
     $garage_data_feautures = [];
     $garage_data_fss = $property->garage_property_feautures;
     foreach($garage_data_fss as $garage_data_fs){
        $garageData_feautures = garage_feauture::where('id',$garage_data_fs->garage_feauture_id)->get();
       array_push($garage_data_feautures,['real_garage_data_feautures'=>$garageData_feautures]);
     }
    //  dd($garage_data_feautures);

     //utilities data fetch
     $utilities_data = [];
     $utilities_data_fs = $property->utility_property_feautures;
     foreach($utilities_data_fs as $utility_data_f){
        $f_commuities = utility_data::where('id',$utility_data_f->utility_data_id)->get();
       array_push($utilities_data,['real_utilities_data_feautures'=>$f_commuities]);
     }


       $propertyOption = $property->option;
       $city = $property->city;
       $location = $property->location;
       $country = $city->country;
    //    dd($country);
       $currency = $country->currency;
    //    dd($currency->symbol);

       array_push($data,
              [
              'property'=>$property,
              'location'=>$location,
              'city'=>$city,
              'country'=>$country,
              'propertyOption'=>$propertyOption,
              'feauture_communities' =>$feauture_communities,
              'exterior_feautures' =>$exterior_feautures,
              'utilities_data' =>$utilities_data,
              'currency' =>$currency,
              'similar_properties'=>$similar_properties,
              'feautured_properties'=>$feautured_properties,
              'garage_data_feautures'=>$garage_data_feautures
            ]);
    //   dd($data[0]['currency']->symbol);

         if(empty($data)){
             dd('empty');
         }else{

            return view('property.frontend.PageViewshow',['data'=>$data]);


            // return view('property.viewPageshow',['data'=>$data]);

         }

    }
    //

}
