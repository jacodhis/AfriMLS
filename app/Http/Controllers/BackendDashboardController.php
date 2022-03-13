<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class BackendDashboardController extends Controller
{
    //
    public function dashboard(){
        $data = [];
        $categories = category::get();
        array_push($data,['propertyTypes'=>$categories]);

        if(empty($data)){
            dd('data is empty');
        }else{
            return view('backendDashboard',compact('data'));

        }





    }
}
