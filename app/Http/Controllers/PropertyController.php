<?php

namespace App\Http\Controllers;

use DB;
use Image;
use App\Models\City;
//use App\Models\option;
use App\Models\currency;
use App\Models\location;
use App\Models\Property;
use App\Models\utility_data;
use Illuminate\Http\Request;
use App\Models\garage_feauture;
use App\Models\exterior_feauture;
use App\Models\community_feauture;
use App\Models\feauture_community;
use App\Models\garage_property_feature;
use App\Models\utility_property_feature;
use App\Models\exterior_property_feauture;
use App\Models\WaterAccess;
use App\Models\WaterExtras;
use App\Models\WaterFrontage;
use App\Models\WaterView;
use App\Models\Config_Property_Selection;

class PropertyController extends Controller
{

// shows all properties with the propertyType id in variable
    public function show( $propertyType){

		$property_types_array = config('settings.property_types');
		if(!array_key_exists($propertyType,$property_types_array)){
			return back();
		}
		$propertyTypeValue = $property_types_array[$propertyType];
		if(!$properties = Property::where('property_type',$propertyTypeValue)->get()){
			return back();
		}
        $data['propertyValue'] = $propertyTypeValue;
		$data['propertyType'] = $propertyType;
        $data['property_types'] = $property_types_array;
		$data['properties'] = $properties;
        return view('property.show',['data'=>$data]);
    }
    //   shows a single property to view page
    public function showoneproperty($id){
        $property = property::findorFail($id);
        //return view('property.showsingleproperty',['property'=>$property]);
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
        //$options = option::get();
        $cities = City::orderBy('name', 'asc')->get();
        $property_types = config('settings.property_types');
        $propertyTypes = $property_types;

        $category = $propertyTypeId;

        // $community_feautures = DB::table('community_feautures')->select('id','community_feauture')->get();
         $f_communities = feauture_community::get();
         $exterior_feautures = exterior_feauture::get();
         $utilities_data_feautures = utility_data::get();
         $currencies = currency::get();
         $garage_feautures = garage_feauture::get();
         $water_accesses = WaterAccess::get();
         $water_extras = WaterExtras::get();
         $water_frontages = WaterFrontage::get();
         $water_views = WaterView::get();

        array_push($data,
        [
        'options'=>$property_types,
        'cities'=>$cities,
        'propertyType'=>$propertyTypeId,
        'category'=>$category,
        'categories'=>$property_types,
        'propertyTypes'=>$propertyTypes,
        'f_communities'=>$f_communities,
        'exterior_feautures'=>$exterior_feautures,
        'utilities_data_feautures'=>$utilities_data_feautures,
        'garage_feautures'=>$garage_feautures,
        'currencies'=>$currencies,
        'water_accesses_array'=> $water_accesses,
        'water_extras_array'=> $water_extras,
        'water_frontages_array'=> $water_frontages,
        'water_views_array'=> $water_views,
        ]);
        $data['propertyTypes'] = $property_types;
        $data['property_types'] = $property_types;
        
        if ($category == "land") {
            $data['listing_types'] = config('settings.listing_types');
            $data['property_styles'] = config('settings.property-styles');
            $data['total-acreage'] = config('settings.total-acreage');
            $data['location'] = config('settings.location');
            $data['location2'] = config('settings.location2');
            $data['front-exp'] = config('settings.front-exp');
            return view('property.createpland', ['data'=>$data]);
        } else {
            return view('property.createp', ['data'=>$data]);
        }

    }
    //stores property
    public function store(Request $request){
		$propertyType = $request->category;
		$property_types_array = config('settings.property_types');
		if(!array_key_exists($propertyType,$property_types_array)){
			return back();
		}
		$propertyValue = $property_types_array[$propertyType];

        $image = [];
        if($request->hasFile('property_images')){

            $files = $request->property_images;

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
            $newProperty->category = $request->category;
            $newProperty->description = $request->description;
            $newProperty->location_id = $request->location_id;
            $newProperty->price = $request->property_price;
            
            $newProperty->square = $request->square;
            $newProperty->house_no = $request->house_number;
            $newProperty->street_name = $request->street_name;
            $newProperty->street_type = $request->street_type;
            $newProperty->str_dir = $request->street_dir;
            $newProperty->unit_no = $request->unit_number;
            $newProperty->period = $request->period;            
            $newProperty->tax_id = $request->tax_id;
            $newProperty->taxes = $request->taxes;
            $newProperty->tax_year = $request->tax_year;
            $newProperty->mls_number = $request->mls_number;
            $newProperty->owner_name = $request->owner_name;
            $newProperty->owner_phone = $request->owner_phone;
            $newProperty->is_feautured = $request->is_feautured ? 'yes' : "no";
            $newProperty->fireplace = $request->fire_place ?  'yes' : "no";
            $newProperty->city_id = $request->city_id;
			$newProperty->property_type = $propertyValue;

            if ($propertyType == "land") {
                $newProperty->water_access = $request->water_access;
                $newProperty->water_view = $request->water_view;
                $newProperty->water_frontage = $request->water_frontage;
                $newProperty->water_extras = $request->water_extras;
                $newProperty->water_name = $request->water_name;
                $newProperty->water_front_feet = $request->water_front_feet;
                $newProperty->updated_at = $request->updated_at;
                $newProperty->expires_on = $request->expires_on;

            } else {
                $newProperty->number_bedroom = $request->no_of_bedrooms;
                $newProperty->number_bathroom = $request->no_of_bathrooms;
                $newProperty->number_floor = $request->no_of_floor;
                $newProperty->condo_building = $request->condo_building;
                $newProperty->condo_floor = $request->condo_floor;
                $newProperty->building_no_floors = $request->building_no_floors;
                $newProperty->building_name_number = $request->building_name_No;
                $newProperty->floors_in_unit = $request->floors_in_unit;
            }

            $newProperty->image = implode('|',$image);

            $newProperty->save();

           if($newProperty){

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

                if ($request->category == "land") {
					//commented this code because it throws an error when posting lands
//                    $newConfigProperty = new Config_Property_Selection;
//                    $newConfigProperty->category = "land";
//                    $newConfigProperty->property_id = $newProperty->id;
//                    $newConfigProperty->setting = "listing_types";
//                    $newConfigProperty->selection = "limited-service";
//                    $newConfigProperty->save();
                }
           }else{
               return back()->with('error','image upload empty');
           }
            return back()->with('success','property added successfully');
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
