<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;


class location extends Seeder
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
        $count = 0;
        for ($i=0; $i < $data; $i++) {
          $count++;
            DB::table('locations')->insert([
                'address' => 'location '.$count,
                'city_id' => mt_rand(1,200),

            ]);

        }

    }
}
