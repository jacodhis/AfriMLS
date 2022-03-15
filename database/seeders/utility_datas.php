<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\utility_data;

class utility_datas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $utilities_data = [
            ['id'=>'1','utilities_data' => 'BB/HH Internet Avail'],
            ['id'=>'2','utilities_data' => 'Cable Available'],
            ['id'=>'3','utilities_data' => 'Cable Connected'],
            ['id'=>'4','utilities_data' => 'City Water'],
            ['id'=>'5','utilities_data' => 'County Water'],
            ['id'=>'6','utilities_data' => 'Electric'],
            ['id'=>'7','utilities_data' => 'Fire Hydrant'],
            ['id'=>'8','utilities_data' => 'Gas'],
            ['id'=>'9','utilities_data' => 'Other'],
            ['id'=>'10','utilities_data' => 'Private Municipal Water'],
            ['id'=>'11','utilities_data' => 'Public Municipal Water'],
            ['id'=>'12','utilities_data' => 'private Utilities'],
            ['id'=>'13','utilities_data' => 'Public Utilities'],
            ['id'=>'14','utilities_data' => 'Public Sewer'],
            ['id'=>'15','utilities_data' => 'Septic'],
            ['id'=>'16','utilities_data' => 'Sprinkler Meter '],
];
      foreach($utilities_data as $utility_data){
        utility_data::create($utility_data);
    }

    }
}
