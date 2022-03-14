<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\feauture_community;

class feauture_communities extends Seeder
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
            ['id'=>'1','c_feautures' => 'Airport\RunAaway Parking'],
            ['id'=>'2','c_feautures' => 'Association Recreation-Lease'],
            ['id'=>'3','c_feautures' => 'Association Recreation-Owned'],
            ['id'=>'4','c_feautures' => 'Boat slip'],
            ['id'=>'5','c_feautures' => 'Community heated pool'],
            ['id'=>'6','c_feautures' => 'Community pool'],
            ['id'=>'7','c_feautures' => 'Deed Restrictions'],
            ['id'=>'8','c_feautures' => 'Dock'],
            ['id'=>'9','c_feautures' => 'Elevators'],
            ['id'=>'10','c_feautures' => 'Fees Required'],
            ['id'=>'11','c_feautures' => 'Fitness'],
            ['id'=>'12','c_feautures' => 'Gated Community'],
            ['id'=>'13','c_feautures' => 'Golf Community'],
            ['id'=>'14','c_feautures' => 'Handicap Modified'],
            ['id'=>'15','c_feautures' => 'HOA Optional'],
            ['id'=>'16','c_feautures' => 'HOA Required'],
];
      foreach($features as $feature){
        feauture_community::create($feature);
    }



    }
}
