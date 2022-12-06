<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class PropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = 10;
        $count = 0;

                $k = rand(0, 2);


        $k2 = rand(0, 1);


        for ($i=0; $i < $data; $i++) {
            $count ++;
            DB::table('properties')->insert([
                'name' => 'Property '.$count,
                'image' => 'image'.mt_rand(1,1000).'.jpg',
                'county_id' => mt_rand(1,47),
                'price' => mt_rand(10000,5000000),
                'number_bedroom' => mt_rand(1,7),
                'number_bathroom' => mt_rand(1,5),
                'location_id' => mt_rand(1,70),
                'city_id' => mt_rand(1,4),
                'fireplace'=> 'no',
                'description' => 'This is a DESCRIPTION ...... Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis',
                'property_type' => 'single-family-unit',
                'category' => 'to-let',

            ]);

        }



    }
}
