<?php

namespace App\Http\Livewire;

use App\Models\city;
use App\Models\option;
use Livewire\Component;
use \App\Models\category;
use \App\Models\property;

class PropertyData extends Component
{

    public $properties;

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
    public function mount(){
      $properties = property::inRandomOrder()->limit(4) ->get();
      $this->properties = $properties;
    }

    public function render()
    {
    //    dd( property::get()->take(4));
        return view('livewire.property-data',[
            'propertyTypes'=>category::get(),
            'options'=> option::get(),
            'cities'=>city::paginate(4),
            'feautured_properties'=>property::where('is_feautured','yes')->inRandomOrder()->take(3)->get(),
        ]);
    }
}

