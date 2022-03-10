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
        DB::table('properties')->insert(
            [
            'name' => Str::random(6),
            'image' => 'https://source.unsplash.com/random',
            'category_id' => 1,
            'amount' => 90000,
            'county_id' => 2,
            'option_id' => '1',

            ]);
            DB::table('properties')->insert(
                [
                'name' => Str::random(6),
                'image' => 'https://source.unsplash.com/random',
                'category_id' => 2,
                'amount' => 100000,
                'county_id' => 3,
                 'option_id' => '3',

                ]);

                DB::table('properties')->insert(
                    [
                    'name' => Str::random(6),
                    'image' => 'https://source.unsplash.com/random',
                    'category_id' => 3,
                    'amount' => 6000,
                    'county_id' => 5,
                    'option_id' => '3',
                    'description'=> 'Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis.'

                    ]);
                    DB::table('properties')->insert(
                        [
                        'name' => Str::random(6),
                        'image' => 'https://source.unsplash.com/random',
                        'category_id' => 4,
                        'amount' => 10000,
                        'county_id' => 2,
                        'option_id' => '1',
                        'description'=> 'Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis.'


                        ]);
                        DB::table('properties')->insert(
                            [
                            'name' => Str::random(6),
                            'image' => 'https://source.unsplash.com/random',
                            'category_id' => 3,
                            'amount' => 90000,
                            'county_id' => 1,
                            'option_id' => '1',
                            'description'=> 'Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis.'


                            ]);
                            DB::table('properties')->insert(
                                [
                                'name' => Str::random(6),
                                'image' => 'https://source.unsplash.com/random',
                                'category_id' => 2,
                                'amount' => 20000,
                                'county_id' => 2,
                                'option_id' => '3',
                                'description'=> 'Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis.'


                                ]);
                                DB::table('properties')->insert(
                                    [
                                    'name' => Str::random(6),
                                    'image' => 'https://source.unsplash.com/random',
                                    'category_id' => 1,
                                    'amount' => 90000,
                                    'county_id' => 2,
                                    'option_id' => '2',
                                    'description'=> 'Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis.'


                                    ]);

    }
}
