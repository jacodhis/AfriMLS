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
            ['id'=>'1','garage_feautures' => 'Assigned Parking','property_id'=>1],
            ['id'=>'2','garage_feautures' => 'Attached','property_id'=>2],
            ['id'=>'3','garage_feautures' => 'Bath in Garage','property_id'=>30],
            ['id'=>'4','garage_feautures' => 'Circular Drive','property_id'=>4],
            ['id'=>'5','garage_feautures' => 'Detached','property_id'=>1],
            ['id'=>'6','garage_feautures' => 'Door Opener','property_id'=>50],
            ['id'=>'7','garage_feautures' => 'Guest Parking','property_id'=>1],
            ['id'=>'8','garage_feautures' => 'None','property_id'=>2],
            ['id'=>'9','garage_feautures' => 'Open Parking','property_id'=>16],
            ['id'=>'10','garage_feautures' => 'Oversized','property_id'=>17],
            ['id'=>'11','garage_feautures' => 'Packing Pad','property_id'=>54],
            ['id'=>'12','garage_feautures' => 'Secure Parking','property_id'=>60],
            ['id'=>'13','garage_feautures' => 'Side Rear Entry','property_id'=>20],
            ['id'=>'14','garage_feautures' => 'Street Parking','property_id'=>30],
            ['id'=>'15','garage_feautures' => 'Washer/Dryier hookup','property_id'=>100],
            ['id'=>'16','garage_feautures' => 'Workshop','property_id'=>26],
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
