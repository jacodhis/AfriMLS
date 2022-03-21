<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\garage_feauture;
use DB;

class garage_feautures extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data = 200;
        // $count = 0;
        // for ($i=0; $i < $data; $i++) {
        //     $count ++;
        //     DB::table('garage_feautures')->insert([
        //         'garage_feautures' => 'feautures '.$count,
        //         'property_id' =>mt_rand(1,200),

        //     ]);

        // }

        //
        $features = [
            ['id'=>'1','garage_feautures' => 'Assigned Parking'],
            ['id'=>'2','garage_feautures' => 'Attached'],
            ['id'=>'3','garage_feautures' => 'Bath in Garage'],
            ['id'=>'4','garage_feautures' => 'Circular Drive'],
            ['id'=>'5','garage_feautures' => 'Detached'],
            ['id'=>'6','garage_feautures' => 'Door Opener'],
            ['id'=>'7','garage_feautures' => 'Guest Parking'],
            ['id'=>'8','garage_feautures' => 'None'],
            ['id'=>'9','garage_feautures' => 'Open Parking'],
            ['id'=>'10','garage_feautures' => 'Oversized'],
            ['id'=>'11','garage_feautures' => 'Packing Pad'],
            ['id'=>'12','garage_feautures' => 'Secure Parking'],
            ['id'=>'13','garage_feautures' => 'Side Rear Entry'],
            ['id'=>'14','garage_feautures' => 'Street Parking'],
            ['id'=>'15','garage_feautures' => 'Washer/Dryier hookup'],
            ['id'=>'16','garage_feautures' => 'Workshop'],
];
      foreach($features as $feature){
        garage_feauture::create($feature);
    //    DB::table('garage_feautures')->insert([
    //        'garage_feautures' => $feature[1],
    //       'property_id' =>mt_rand(1,200),

    //    ]);
      }

    }
}
