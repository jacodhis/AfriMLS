<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\category;
use \App\Models\property;
class PropertyData extends Component
{
    public $datas;

    public function mount($propertyTypeId){

        $propertyData = category::findorFail($propertyTypeId);
        $properties = property::where('category_id',$propertyTypeId)->simplePaginate(8);
        array_push($data,['propertyData'=>$propertyData,'properties' => $properties]);
        if(!empty($data)){
            dd('empty');
        }
        $this->datas = $data;

    }

    public function render()
    {
        dd($this->datas);
        // dd($data);
        return view('livewire.property-data');
    }
}
