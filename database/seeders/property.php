<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class property extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('properties')->insert([
        //     [
        //     'name' => Str::random(6),
        //     'image' => 'https://source.unsplash.com/random',
        //     'category_id' => 1,
        //     'amount' => 90000,
        //     'county_id' => 2,
        //     'option_id' => '1',

        //     ],
        //     [
        //         'name' => Str::random(6),
        //         'image' => 'https://source.unsplash.com/random',
        //         'category_id' => 2,
        //         'amount' => 100000,
        //         'county_id' => 3,
        //          'option_id' => '3',

        //     ],
        //     [
        //         'name' => Str::random(6),
        //         'image' => 'https://source.unsplash.com/random',
        //         'category_id' => 3,
        //         'amount' => 6000,
        //         'county_id' => 5,
        //         'option_id' => '3',
        //         'description'=> 'Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis.'

        //     ],
        //     [
        //         'name' => Str::random(6),
        //         'image' => 'https://source.unsplash.com/random',
        //         'category_id' => 4,
        //         'amount' => 10000,
        //         'county_id' => 2,
        //         'option_id' => '1',
        //         'description'=> 'Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis.'


        //     ],
        //     [
        //         'name' => Str::random(6),
        //         'image' => 'https://source.unsplash.com/random',
        //         'category_id' => 3,
        //         'amount' => 90000,
        //         'county_id' => 1,
        //         'option_id' => '1',
        //         'description'=> 'Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis.'


        //     ],
        //     [
        //         'name' => Str::random(6),
        //         'image' => 'https://source.unsplash.com/random',
        //         'category_id' => 2,
        //         'amount' => 20000,
        //         'county_id' => 2,
        //         'option_id' => '3',
        //         'description'=> 'Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis.'


        //     ],
        //     [
        //         'name' => Str::random(6),
        //         'image' => 'https://source.unsplash.com/random',
        //         'category_id' => 1,
        //         'amount' => 90000,
        //         'county_id' => 2,
        //         'option_id' => '2',
        //         'description'=> 'Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis.'


        //     ],
        // ]);


        $data = 1000;
        $count = 0;
        for ($i=0; $i < $data; $i++) {
            $count ++;
            DB::table('properties')->insert([

                'name' => 'Property '.$count,
                'image' => 'image'.mt_rand(1,1000).'.jpg',
                'category_id' => mt_rand(1,3),
                'county_id' => mt_rand(1,47),
                'option_id' => mt_rand(1,3),
                 'price' => mt_rand(10000,5000000),
                 'location_id' => mt_rand(1,70),
                 'city_id' => mt_rand(1,4),
                 'fireplace'=> 'no',
                //  'owner_name'=> '',
                //  'owner_phone' =>'',
                //  'tenant_name' =>'',
                //  'tenant_phone'=> '',
                //  'dimensions_studio' =>'',
                //  'dimensions_livingroom' => '',
                //  'dimensions_diningroom'=> '',
                //  'dimensions_family_room' =>'',
                //  'dimensions_kitchen'=>'',
                //  'dimensions_master_bedroom'=>'',
                //  'dimensions_room2'=>'',
                //  'dimensions_room3'=>'',
                //  'dimensions_balcony_porch'=>'',
                //  'dimensions_balcony_porch2'=>'',
                //  'dimensions_dinette'=>'',
                //  'dimensions_bonus_room'=>'',
                //  'garage_feauture_id' =>mt_rand(1,16),
                 'description' => 'This is a DESCRIPTION ...... Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis',

            ]);

        }



    }
}
