<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class todo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todo')->insert([
            'username' => Str::random(10),
            'age'=>random_int(18,30),
            'task'=>Str::random(30),
            'complete'=>mt_rand(0,1)
            
            
        ]);
    }
}
