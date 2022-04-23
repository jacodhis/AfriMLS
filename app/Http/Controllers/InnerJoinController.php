<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;
use App\Models\category;
use DB;


class InnerJoinController extends Controller
{
    //
    public function innerJoin(){
    //    $data = DB::table('categories')
    //    ->join('properties','categories.id','=','properties.category_id')
    //    ->select('categories.name as CategoryName','properties.name as  PropertyName')->get();

    $data = DB::table('properties')
    ->join('categories','properties.category_id','=','categories.id')
    ->select('categories.name as CategoryName','properties.name as  PropertyName','properties.price as  Price','properties.category_id as CatId')->get();

    // return $data;
       dd($data);
    }
}
