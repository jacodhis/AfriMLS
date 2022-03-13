<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\category;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            // ['id'=>'1','name' => 'Apartment'],
            ['id'=>'1','name' => 'House'],
            ['id'=>'2','name' => 'Land'],
            // ['id'=>'4','name' => 'Accessories'],
            // ['id'=>'5','name' => 'clothes'],

];
        foreach ($categories as $category) {
            category::create($category);
        }
    }
}
