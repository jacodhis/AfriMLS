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
        $count = 0;
        for ($i=0; $i < $data; $i++) {
           $count ++;
            DB::table('feautures')->insert([
                'feauture' => 'Feauture'.$count,
                'property_id' => mt_rand(1,200)

            ]);
        }

    }
}
