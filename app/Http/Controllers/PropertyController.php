<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;

class PropertyController extends Controller
{

    public function addProperty(){
        return view('property.addproperty');
    }

    public function myproperties(){
        return view('property.myproperties');
    }

    public function show($id){
        // $specification = specification::where('property_id','=',$id)->get();
        // if(empty($specification)){
        //      echo "empty";
        // }else{
        //     dd($specification);

        // }
       $property = property::findorFail($id);


       return view('property.show',['property'=>$property]);

    }







}
