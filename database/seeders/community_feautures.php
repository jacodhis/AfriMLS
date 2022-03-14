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
            ['id'=>'1','community_feauture' => 'Airport\RunAaway Parking'],
            ['id'=>'2','community_feauture' => 'Association Recreation-Lease'],
            ['id'=>'3','community_feauture' => 'Association Recreation-Owned'],
            ['id'=>'4','community_feauture' => 'Boat slip'],
            ['id'=>'5','community_feauture' => 'Community heated pool'],
            ['id'=>'6','community_feauture' => 'Community pool'],
            ['id'=>'7','community_feauture' => 'Deed Restrictions'],
            ['id'=>'8','community_feauture' => 'Dock'],
            ['id'=>'9','community_feauture' => 'Elevators'],
            ['id'=>'10','community_feauture' => 'Fees Required'],
            ['id'=>'11','community_feauture' => 'Fitness'],
            ['id'=>'12','community_feauture' => 'Gated Community'],
            ['id'=>'13','community_feauture' => 'Golf Community'],
            ['id'=>'14','community_feauture' => 'Handicap Modified'],
            ['id'=>'15','community_feauture' => 'HOA Optional'],
            ['id'=>'16','community_feauture' => 'HOA Required'],
];
      foreach($community_features as $feature){
        community_feauture::create($feature);
    }

    }
}
