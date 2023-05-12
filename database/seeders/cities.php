<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\City;
use Illuminate\Support\Str;

class cities extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        // start
        $counties = [
             'Nairobi',
             'Mombasa',
             'Bungoma'
       ];
        foreach ($counties as $county) {
          City::create([
            'name'=>$county,
             'postalCode' => mt_rand(10000,55555),
            'country_id'=> 1
          ]);
        }

        //end
    }
}
