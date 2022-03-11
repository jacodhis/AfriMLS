<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\city;
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
        //
        $data = 200;
        for ($i=0; $i < $data; $i++) {

            DB::table('cities')->insert([
                'name' => Str::random(10),
                'postalCode' => mt_rand(10000,55555),
                'country_id' => mt_rand(1,200),

            ]);

        }
    }
}
