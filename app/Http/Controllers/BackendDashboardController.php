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
        $data['propertyTypes'] = $categories;

        return view('backendDashboard', ['data' => $data]);

    }
}
