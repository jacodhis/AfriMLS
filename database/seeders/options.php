<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\option;

class options extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $options = [
            ['id'=>'1','name' => 'For Rent'],
            ['id'=>'2','name' => 'To Let'],
            ['id'=>'3','name' => 'For Sale'],


        ];
        foreach ($options as $option) {
            option::create($option);
        }

    }
}
