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
            ['id'=>'1','garage_carpot' => 'Assigned Parking'],
            ['id'=>'2','garage_carpot' => 'Attached'],
            ['id'=>'3','garage_carpot' => 'Bath in Garage'],
            ['id'=>'4','garage_carpot' => 'Circular Drive'],
            ['id'=>'5','garage_carpot' => 'Detached'],
            ['id'=>'6','garage_carpot' => 'Door Opener'],
            ['id'=>'7','garage_carpot' => 'Guest Parking'],
            ['id'=>'8','garage_carpot' => 'None'],
            ['id'=>'9','garage_carpot' => 'Open Parking'],
            ['id'=>'10','garage_carpot' => 'Oversized'],
            ['id'=>'11','garage_carpot' => 'Packing Pad'],
            ['id'=>'12','garage_carpot' => 'Secure Parking'],
            ['id'=>'13','garage_carpot' => 'Side Rear Entry'],
            ['id'=>'14','garage_carpot' => 'Street Parking'],
            ['id'=>'15','garage_carpot' => 'Washer/Dryier hookup'],
            ['id'=>'16','garage_carpot' => 'Workshop'],
];
      foreach($features as $feature){
        garage_carport::create($feature);
    }
}

}
