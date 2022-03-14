<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\community_feauture;

class community_feautures extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $community_features = [
            ['id'=>'1','community_feauture' => 'Airport\RunAaway Parking','property_id'=>1],
            ['id'=>'2','community_feauture' => 'Association Recreation-Lease','property_id'=>1],
            ['id'=>'3','community_feauture' => 'Association Recreation-Owned','property_id'=>1],
            ['id'=>'4','community_feauture' => 'Boat slip','property_id'=>1],
            ['id'=>'5','community_feauture' => 'Community heated pool','property_id'=>1],
            ['id'=>'6','community_feauture' => 'Community pool','property_id'=>1],
            ['id'=>'7','community_feauture' => 'Deed Restrictions','property_id'=>1],
            ['id'=>'8','community_feauture' => 'Dock','property_id'=>1],
            ['id'=>'9','community_feauture' => 'Elevators','property_id'=>1],
            ['id'=>'10','community_feauture' => 'Fees Required','property_id'=>1],
            ['id'=>'11','community_feauture' => 'Fitness','property_id'=>1],
            ['id'=>'12','community_feauture' => 'Gated Community','property_id'=>1],
            ['id'=>'13','community_feauture' => 'Golf Community','property_id'=>1],
            ['id'=>'14','community_feauture' => 'Handicap Modified','property_id'=>1],
            ['id'=>'15','community_feauture' => 'HOA Optional','property_id'=>1],
            ['id'=>'16','community_feauture' => 'HOA Required','property_id'=>1],
];
      foreach($community_features as $feature){
        community_feauture::create($feature);
    }

    }
}
