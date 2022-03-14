<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\exterior_feauture;

class exterior_feautures extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exterior_features = [
            ['id'=>'1','exterior_features' => 'Balcony \Sundesk'],
            ['id'=>'2','exterior_features' => 'Barn'],
            ['id'=>'3','exterior_features' => 'Detached in law Apt'],
            ['id'=>'4','exterior_features' => 'Detached workshop'],
            ['id'=>'5','exterior_features' => 'Fenced'],
            ['id'=>'6','exterior_features' => 'GreenHouse'],
            ['id'=>'7','exterior_features' => 'Gutters/Downspouts'],
            ['id'=>'8','exterior_features' => 'Handicap modified'],
            ['id'=>'9','exterior_features' => 'Hot tub'],
            ['id'=>'10','exterior_features' => 'Irrigation System'],
            ['id'=>'11','exterior_features' => 'Mature Landscaping'],
            ['id'=>'12','exterior_features' => 'Oak Tree'],
            ['id'=>'13','exterior_features' => 'Other'],
            ['id'=>'14','exterior_features' => 'Parking-RV/Boat'],
            ['id'=>'15','exterior_features' => 'Patio/Porch Covered'],
            ['id'=>'16','exterior_features' => 'Patio/Porch open'],
];
      foreach($exterior_features as $feature){
        exterior_feauture::create($feature);
    }
        //
    }
}
