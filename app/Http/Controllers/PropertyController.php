<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;
use App\Models\Category;
use App\Models\option;
use App\Models\city;
use App\Models\community_feauture;
use App\Models\feauture_community;
use DB;
use Image;

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
    //displays form to add property
    public function create($propertyTypeId){
        $data = [];
        $options = option::get();
        $cities = city::orderBy('name', 'asc')->get();
        $propertyType = category::findorFail($propertyTypeId);
        // $community_feautures = DB::table('community_feautures')->select('id','community_feauture')->get();
         $f_communities = feauture_community::get();


        array_push($data,['options'=>$options,'cities'=>$cities,'propertyType'=>$propertyType,'f_communities'=>$f_communities]);
        // dd($data[0]['community_feautures']);

        return view('property.createproperty',['data'=>$data]);

    }
    //stores property
    public function store(Request $request){
        // dd($request->all());




        $image = [];
        if($request->hasFile('property_images')){
            $files = $request->property_images;
            // dd($files);
            foreach($files as $file){

                $image_name = md5(rand(1000,10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
               //  $upload_path = 'public/multiple-images/';
                $upload_path = 'images/propertyImages/';
                $file->move(public_path($upload_path), $image_full_name);
                $image_url = $upload_path.$image_full_name;
                // $size = Image::make($file)->resize(500,500)->save($upload_path.$image_full_name);
                array_push($image,$image_url);
            }
            $newProperty = new property;
            $newProperty->name = $request->pname;
            $newProperty->category_id = $request->propertyId;
            $newProperty->option_id = $request->option_id;
            $newProperty->description = $request->description;
            $newProperty->category_id = $request->propertyTypeId;
            $newProperty->city_id = $request->city_id;
            $newProperty->image = implode('|',$image);

            $newProperty->save();
           if($newProperty){
            if(!$request->community_fs){
                dd('empty');
            }else{
                // dd($request->community_fs);
                $c_fs = $request->community_fs;
                foreach($c_fs as $cf){
                   $community_feauture = new community_feauture;
                   $community_feauture->community_feauture_id = $cf;
                   $community_feauture->property_id =  $newProperty->id;
                   $community_feauture->save();
                }

            }
           }else{
               return back()->with('error','from empty');
           }

            return back();
            session()->flash('success','upload done successfully');


        }else{
            dd('does not exist');
        }




    }


    public function myproperties(){
        return view('property.myproperties');
    }

    public function viewPageshow($id){

       $data = [];
       $property = property::findorFail($id);
       $cfs = $property->community_feautures;
       if(!$cfs){
           dd('not there');
       }
       $feauture_communities = [];
       foreach($cfs as $c_f){
          $f_commuities = feauture_community::where('id',$c_f->community_feauture_id)->get();
         array_push($feauture_communities,['real_c_feautures'=>$f_commuities]);
       }
    //    dd($feauture_communities);

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
              'feauture_communities' =>$feauture_communities,

            ]);
    //   dd($data[0]['feauture_communities']);

         if(empty($data)){
             dd('empty');
         }else{

            return view('property.PageViewshow',['data'=>$data]);


            // return view('property.viewPageshow',['data'=>$data]);

         }






    }








}
