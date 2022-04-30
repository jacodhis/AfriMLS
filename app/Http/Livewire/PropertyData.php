<?php

namespace App\Http\Livewire;

use App\Models\city;
use App\Models\option;
use Livewire\Component;
use \App\Models\category;
use \App\Models\property;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Session;

class PropertyData extends Component
{
    use WithPagination;

    public function searchCityProp($cityId){
            $properties = property::where('city_id',$cityId)->get();
            $this->properties = $properties;
    }
    public function searchPropTypeProp($propTypeId){
        $properties = property::where('category_id',$propTypeId)->get();
        $this->properties = $properties;
    }
    public function searchOptionProp($optionProp){
        $properties = property::where('option_id',$optionProp)->get();
        $this->properties = $properties;
    }

    public function render()
    {
        if(Session::has('properties')){
            return view('livewire.property-data',[
               'properties' =>Session::get('properties'),
               'propertyTypes'=>category::get(),
                'options'=> option::get(),
                'cities'=>city::simplePaginate(6),
                'feautured_properties'=>property::where('is_feautured','yes')->inRandomOrder()->take(3)->get(),
            ]);
        }
            return view('livewire.property-data',[
                'properties'=> property::paginate(3),
                'propertyTypes'=>category::get(),
                'options'=> option::get(),
                'cities'=>city::simplePaginate(6),
                'feautured_properties'=>property::where('is_feautured','yes')->inRandomOrder()->take(3)->get(),
            ]);



    }
}

