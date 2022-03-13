<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\description;
use DB;

class descriptions extends Seeder
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
            DB::table('descriptions')->insert([
                'name' => 'sq fit '.$count,
                'property_id' => mt_rand(1,200),

            ]);

        }

    }
}
