<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\garage_carport;


class garage_carports extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $features = [
            ['id'=>'1','garage_carpot' => 'Assigned Parking','property_id'=>1],
            ['id'=>'2','garage_carpot' => 'Attached','property_id'=>2],
            ['id'=>'3','garage_carpot' => 'Bath in Garage','property_id'=>30],
            ['id'=>'4','garage_carpot' => 'Circular Drive','property_id'=>4],
            ['id'=>'5','garage_carpot' => 'Detached','property_id'=>1],
            ['id'=>'6','garage_carpot' => 'Door Opener','property_id'=>50],
            ['id'=>'7','garage_carpot' => 'Guest Parking','property_id'=>1],
            ['id'=>'8','garage_carpot' => 'None','property_id'=>2],
            ['id'=>'9','garage_carpot' => 'Open Parking','property_id'=>16],
            ['id'=>'10','garage_carpot' => 'Oversized','property_id'=>17],
            ['id'=>'11','garage_carpot' => 'Packing Pad','property_id'=>54],
            ['id'=>'12','garage_carpot' => 'Secure Parking','property_id'=>60],
            ['id'=>'13','garage_carpot' => 'Side Rear Entry','property_id'=>20],
            ['id'=>'14','garage_carpot' => 'Street Parking','property_id'=>30],
            ['id'=>'15','garage_carpot' => 'Washer/Dryier hookup','property_id'=>100],
            ['id'=>'16','garage_carpot' => 'Workshop','property_id'=>26],
];
      foreach($features as $feature){
        garage_carport::create($feature);
    }
}

}
