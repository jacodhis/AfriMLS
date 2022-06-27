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
          
            ['id'=>'1','name' => 'Single Family Unit'],
            ['id'=>'2','name' => 'Multi Family Unit'],
            ['id'=>'3','name' => 'Land'],
           

];
        foreach ($categories as $category) {
            category::create($category);
        }
    }
}
