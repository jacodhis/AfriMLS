<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\currency;

class currencies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $curencies = [
            ['id'=>'1','code' => 'KE','symbol'=> 'ksh','country_id'=>147],
            ['id'=>'2','code' => 'USD','symbol'=> '$','country_id'=>10],
            ['id'=>'3','code' => 'GBP','symbol'=> '£','country_id'=>3],
            ['id'=>'4','code' => 'CAD','symbol'=> '$','country_id'=>4],
            ['id'=>'5','code' => 'JPY','symbol'=> '¥','country_id'=>5],
            ['id'=>'6','code' => 'UGX','symbol'=> 'Ush','country_id'=>2],

];
        foreach ($curencies as $currency) {
          currency::create($currency);
        }
    }
}
