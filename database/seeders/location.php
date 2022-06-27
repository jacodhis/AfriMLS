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
        // $data = 200;
        // $count = 0;
        // for ($i=0; $i < $data; $i++) {
        //   $count++;
        //     DB::table('locations')->insert([
        //         'address' => 'location '.$count,
        //         'city_id' => mt_rand(1,200),

        //     ]);

        // }
        //start
        $locations = [
            'Buruburu',
            'Westlands',
            'DohnHolm',
            'webuye',
            'kwale'
      ];
      
        DB::table('locations')->insert([
            'address' => $locations[3],
            'city_id' => 3,
        ]);

        DB::table('locations')->insert([
            'address' => $locations[0],
            'city_id' => 1,
        ]);
        DB::table('locations')->insert([
            'address' => $locations[2],
            'city_id' => 1,
        ]);
        DB::table('locations')->insert([
            'address' => $locations[4],
            'city_id' => 2,
        ]);
 
        

  
        //end

    }
}
