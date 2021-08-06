<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('musers')->insert([
            'Name'=>Str::random(10),
            'Age'=>Str::random(10),
            'Class'=>Str::random(10),
        ]);
    }
}
