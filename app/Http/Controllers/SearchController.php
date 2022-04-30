<?php

namespace App\Http\Controllers;

use App\Models\location;
use App\Models\property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SearchController extends Controller
{
    //
    public function search(Request $request){

      // Property::with('user')
      // ->when(request('name'),function(){
          
      // });
        $result = property::query();
        $locationQuery = location::query();
        //checks the search for seleceted neighbourhood
        if (!empty($request->neighbourhood) ) {
         $location = $locationQuery->where('address', 'like', '%'.$request->neighbourhood.'%')->first();
            if(!empty($location->id)){
                $result = $result->where('location_id',$location->id);
            }else{
                return back()->with('error','No result found with the search');
            }
        }
        //checks the search for seleceted county
        if ($request->select_county != "empty" ) {

             $result = $result->where('county_id', 'like', '%'.$request->select_county.'%');
        }
        //checks the search for selected property type
        if ($request->select_type != "empty" ) {
             $result = $result->where('category_id', 'like', '%'.$request->select_type.'%');
         }
          //checks the search for selected status
         if ($request->select_status != "empty" ) {
             $result = $result->where('option_id', 'like', '%'.$request->select_status.'%');
         }
         // check if all the search fields are empty
         if(empty($request->neighbourhood) && $request->select_county == "empty" && $request->select_type  == "empty"  && $request->select_status  == "empty"){
           return back()->with('error','please enter a such');
         }
         //checks the search for if all selected fields are not empty
         if(!empty($request->neighbourhood) && $request->select_county != "empty" && $request->select_type  != "empty"  && $request->select_status  != "empty"){
            $location = $locationQuery->where('address', 'like', '%'.$request->neighbourhood.'%')->first();
            $locId = [];
            if(!empty($location->id)){
                 array_push($locId,$location->id);
            }else{
               return back()->with('error','No result found');
            }
            $result = $result->where('category_id', 'like', '%'.$request->select_type.'%')
                            ->where('location_id',$locId[0])
                            ->where('county_id','like','%'.$request->select_county.'%')
                            ->where('option_id', 'like', '%'.$request->select_status.'%');


         }
         //checks the search for if all selected county,property Type and property option/status
         if($request->select_county != "empty" && $request->select_type  != "empty"  && $request->select_status  != "empty"){

            $result = $result->where('category_id', 'like', '%'.$request->select_type.'%')
                            ->where('county_id','like','%'.$request->select_county.'%')
                            ->where('option_id', 'like', '%'.$request->select_status.'%');
         }
          //checks the search for if selected neighbourhood ,county,property Type
         if(!empty($request->neighbourhood) && $request->select_county != "empty" && $request->select_type  != "empty" ){
            $location = $locationQuery->where('address', 'like', '%'.$request->neighbourhood.'%')->first();
            $locId = [];
            if(!empty($location->id)){
                 array_push($locId,$location->id);
            }else{
               return back()->with('error','no result found');
            }
            $result = $result->where('category_id', 'like', '%'.$request->select_type.'%')
                            ->where('location_id',$locId[0])
                            ->where('county_id','like','%'.$request->select_county.'%');
         }
           //checks the search for neighbourhood,selected_county and status
           if(!empty($request->neighbourhood) && $request->select_county != "empty"  && $request->select_status  != "empty"){
            $location = $locationQuery->where('address', 'like', '%'.$request->neighbourhood.'%')->first();
            $locId = [];
            if(!empty($location->id)){
                 array_push($locId,$location->id);
            }else{
               return back()->with('error','No result found ');
            }
            $result = $result->where('location_id',$locId[0])
                            ->where('county_id','like','%'.$request->select_county.'%')
                            ->where('option_id', 'like', '%'.$request->select_status.'%');


         }


           //checks the search for selected property Type and selected option
         if($request->select_type  != "empty"  && $request->select_status  != "empty"){
            $result = $result->where('category_id', 'like', '%'.$request->select_type.'%')
                            ->where('option_id', 'like', '%'.$request->select_status.'%');
         }
          //checks the search for selected county and selected option
         if($request->select_county != "empty"  && $request->select_status  != "empty"){
            $result = $result->where('county_id','like','%'.$request->select_county.'%')
                            ->where('option_id', 'like', '%'.$request->select_status.'%');
         }

          //checks the search for selected neighbourhood and selected county
         if(!empty($request->neighbourhood) && $request->select_county != "empty" ){
            $location = $locationQuery->where('address', 'like', '%'.$request->neighbourhood.'%')->first();
            $locId = [];
            if(!empty($location->id)){
                 array_push($locId,$location->id);
            }else{
               return back()->with('error','no result found');
            }
            $result = $result->where('county_id','like','%'.$request->select_county.'%')
                            ->where('location_id',$locId[0]);

         }
         //checks the search for selected county and selected property type
          if($request->select_county != "empty" && $request->select_type  != "empty"){
            $result = $result->where('category_id', 'like', '%'.$request->select_type.'%')
                            ->where('county_id','like','%'.$request->select_county.'%');
         }


        if($result->count() == 0){
            return back()->with('error','No results Found');
         }
         $properties = $result->paginate(10);
         

         Session::put('properties',$properties);
         return redirect()->route('properties');


    }
}
