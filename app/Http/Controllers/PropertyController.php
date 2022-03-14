<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;
use App\Models\Category;
use App\Models\option;
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
        $options = option::get();
        $propertyType = category::findorFail($propertyTypeId);
        return view('property.createproperty',['propertyType'=>$propertyType,'options'=>$options]);

    }
    //stores property
    public function store(Request $request){
        // dd($request->option_id);




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
            $newProperty->image = implode('|',$image);

            $newProperty->save();

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

            return view('property.PageViewshow',['data'=>$data]);


            // return view('property.viewPageshow',['data'=>$data]);

         }






    }








}
