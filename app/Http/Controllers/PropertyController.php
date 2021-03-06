<?php

namespace App\Http\Controllers;

use DB;
use Image;
use App\Models\city;
use App\Models\option;
use App\Models\category;
use App\Models\currency;
use App\Models\location;
use App\Models\property;
use App\Models\utility_data;
use Illuminate\Http\Request;
use App\Models\garage_feauture;
use App\Models\exterior_feauture;
use App\Models\community_feauture;
use App\Models\feauture_community;
use App\Models\garage_property_feature;
use App\Models\utility_property_feature;
use App\Models\exterior_property_feauture;

class PropertyController extends Controller
{

// shows all propertis with the propertyType id in variable
    public function show( $propertyTypeId){
        // dd('hi');
        $data = [];

        $propertyData = category::findorFail($propertyTypeId);
        // dd($propertyData);
        $properties = property::where('category_id',$propertyTypeId)->get();
        // dd($properties);

        array_push($data,['propertyData'=>$propertyData,'properties' => $properties]);
        if(empty($data)){
            dd('empty');
        }else{
            // dd($data);

         return view('property.show',['data'=>$data]);
        }
    }
    //   shows a single property to view page
    public function showoneproperty($id){
        $property = property::findorFail($id);
        return view('property.showsingleproperty',['property'=>$property]);
        // return $property;
    }

    // ajax request to get locations
    public function getLocations(){
        $city_id = $_REQUEST["myCity"];
        $locations = location::where('city_id',$city_id)->get();
        $locationsdropdown = "<select name='location_id' class='form-control'>";
        foreach ($locations as $location) {
            $locationsdropdown .= "<option value='$location->id'>$location->address</option>";
        }
        $locationsdropdown .= "</select>";
        return response()->json(array('locationsdropdown'=> $locationsdropdown), 200);
    }
    //displays form to add property
    public function create($propertyTypeId){
        $data = [];
        $options = option::get();
        $cities = city::orderBy('name', 'asc')->get();
        $propertyType = category::findorFail($propertyTypeId);
        // dd($propertyType);
        // $community_feautures = DB::table('community_feautures')->select('id','community_feauture')->get();
         $f_communities = feauture_community::get();
         $exterior_feautures = exterior_feauture::get();
         $utilities_data_feautures = utility_data::get();
         $currencies = currency::get();
         $garage_feautures = garage_feauture::get();
        //  dd($garage_feautures);


        array_push($data,
        [
        'options'=>$options,
        'cities'=>$cities,
        'propertyType'=>$propertyType,
        'f_communities'=>$f_communities,
        'exterior_feautures'=>$exterior_feautures,
        'utilities_data_feautures'=>$utilities_data_feautures,
        'garage_feautures'=>$garage_feautures,
        'currencies'=>$currencies
        ]);
       
        return view('property.createp',['data'=>$data]);

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
                // $size = Image::make($file)->resize(500,500)->save($image_url,80);
                array_push($image,$image_url);
            }

           
            $newProperty = new property;
            $newProperty->name = $request->pname;
            $newProperty->category_id = $request->propertyId;
            $newProperty->option_id = $request->option_id;
            $newProperty->description = $request->description;
            $newProperty->category_id = $request->propertyTypeId;
            $newProperty->location_id = $request->location_id;
            $newProperty->price = $request->property_price;
            $newProperty->number_bedroom = $request->no_of_bedrooms;
            $newProperty->number_bathroom = $request->no_of_bathrooms;
            $newProperty->number_floor = $request->no_of_floor;
            $newProperty->square = $request->square;
            $newProperty->house_no = $request->house_number;
            $newProperty->street_name = $request->street_name;
            $newProperty->street_type = $request->street_type;
            $newProperty->str_dir = $request->street_dir;
            $newProperty->unit_no = $request->unit_number;
            $newProperty->period = $request->period;
            $newProperty->condo_building = $request->condo_building;
            $newProperty->condo_floor = $request->condo_floor;
            $newProperty->building_no_floors = $request->building_no_floors;
            $newProperty->building_name_number = $request->building_name_No;
            $newProperty->floors_in_unit = $request->floors_in_unit;
            $newProperty->tax_id = $request->tax_id;
            $newProperty->taxes = $request->taxes;
            $newProperty->tax_year = $request->tax_year;
            $newProperty->mls_number = $request->mls_number;
            $newProperty->owner_name = $request->owner_name;
            $newProperty->owner_phone = $request->owner_phone;
            $newProperty->is_feautured = $request->is_feautured ? 'yes' : "no";
            $newProperty->fireplace = $request->fire_place ?  'yes' : "no";
            // $newProperty->currency_id = $request->currency_id;
            $newProperty->city_id = $request->city_id;
            $newProperty->image = implode('|',$image);

            $newProperty->save();

           if($newProperty){

                // dd($request->exeterior_fs);
                $c_fs = $request->community_fs;
                if(!empty($c_fs)){
                    foreach($c_fs as $cf){
                        $community_feauture = new community_feauture;
                        $community_feauture->community_feauture_id = $cf;
                        $community_feauture->property_id =  $newProperty->id;
                        $community_feauture->save();
                     }

                }

                $ext_fs = $request->exeterior_fs;
                if(!empty($ext_fs)){
                    foreach($ext_fs as $ext_f){
                        $exterior_feauture = new exterior_property_feauture;
                        $exterior_feauture->property_id = $newProperty->id;
                        $exterior_feauture->exterior_feauture_id = $ext_f;
                        $exterior_feauture->save();
                    }
                }

                $utilities_data_feautures = $request->utilities_feauture;
                if(!empty($utilities_data_feautures)){
                    foreach($utilities_data_feautures as $ut_data_f){
                        $utilities_data_feauture = new utility_property_feature;
                        $utilities_data_feauture->property_id = $newProperty->id;
                        $utilities_data_feauture->utility_data_id = $ut_data_f;
                        $utilities_data_feauture->save();
                    }

                }
                $garage_property_feautures = $request->garage_feautures;
                if(!empty($garage_property_feautures)){
                    foreach($garage_property_feautures as $garage_property_feauture_id){
                        $garage_f = new garage_property_feature;
                        $garage_f->property_id = $newProperty->id;
                        $garage_f->garage_feauture_id = $garage_property_feauture_id;
                        $garage_f->save();
                    }

                }


           }else{
               return back()->with('error','image upload empty');
           }

            return back()->with('success','property added successfully');
            // session()->flash('success','upload done successfully');


        }else{
            return back()->with('error','please upload the property image/s');
        }




    }


    public function myproperties(){

        return view('property.frontend.myproperties');
    }
    //  public function searchLike(){
    //     $searchLike = $_REQUEST["searchLike"];
    //     $city = $_REQUEST["city"];
    //     return $city;

    //  }

      //display properties to view page
      public function allProperties(){
        //   dd('hello again');
        return view('property.frontend.allProperties');
        // $data = [];
        // $propertyTypes = category::get();
        // $options = option::get();
        // $cities = city::paginate(4);
        // $feautured_properties = property::where('is_feautured','yes')->inRandomOrder()->take(3)->get();
        // array_push($data,['propertyTypes'=>$propertyTypes,'options'=>$options,'cities'=>$cities,'feautured_properties'=>$feautured_properties]);
        // if(!empty($data)){
        //     return view('property.frontend.allProperties',['data'=>$data]);
        // }return ;

    }

   








}
