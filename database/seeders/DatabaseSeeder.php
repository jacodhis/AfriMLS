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
        $this->call(property::class);
        $this->call(counties::class);
        $this->call(categories::class);
        $this->call(options::class);
        // \App\Models\User::factory(10)->create();
    }
}
