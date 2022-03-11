<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class feautures extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = 500;
        for ($i=0; $i < $data; $i++) {

            DB::table('feautures')->insert([
                'feauture' => Str::random(10),
                'property_id' => mt_rand(1,200)

            ]);
        }

    }
}
