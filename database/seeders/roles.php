<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\role;

class roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles = [
            ['id'=>'1','name' => 'admin'],
            ['id'=>'2','name' => 'agent'],
            ['id'=>'3','name' => 'user'],
        ];
        foreach($roles as $role){
            role::create($role);
        }


    }
}
