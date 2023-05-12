<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendDashboardController extends Controller
{
    //
    public function dashboard(){

        $data = [];
        $categories = config('settings.categories');

        $data['categ_count'] = count($categories);
        $data['categories'] = $categories;

        $property_types = config('settings.property_types');

        $data['property_types_count'] = count($property_types);
        $data['property_types'] = $property_types;

        return view('backendDashboard', ['data' => $data]);

    }
}
