<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;
use App\Models\county;
use App\Models\category;

use DB;

class IndexController extends Controller
{
    public function landingPage(){

        $data = [];
         $options = DB::table('options')->select(['id','name'])->get();//goes to search

       $properties = property::get();

       $counties = county::get(); //used in place of country in search
       $categories = category::get();

       array_push($data,[
           'properties'=>$properties,
           'counties' => $counties,
           'categories' =>$categories,
           'options' =>$options
        ]);


       if(empty($data)){
           dd('empty');
           //echo default landing page
        //    return view('pages.index',['properties'=>$properties]);
       }else{
        //    dd($data);

        return view('pages.index',['data'=>$data]);
       }

    }


    public function contactPage(){
        return view('pages.contactpage');
    }
    public function aboutUs(){
        return view('pages.aboutUs');
    }






}
