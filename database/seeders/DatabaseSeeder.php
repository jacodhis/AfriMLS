<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        // $this->call(property::class);
        $this->call(roles::class);
        $this->call(counties::class);
        $this->call(Countries::class);

        $this->call(location::class);
        $this->call(cities::class);
       //garage
        $this->call(garage_feautures::class);
        // $this->call(garage_carports::class);
        $this->call(feauture_communities::class);
        $this->call(exterior_feautures::class);
        $this->call(utility_datas::class);
        $this->call(currencies::class);
        $this->call(architectural_styles::class);
//        $this->call(PropertyTableSeeder::class);


    }
}
