<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RestarurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'name' => Str::random(24),
            'street' => Str::random(12),
            'number' => rand(1, 324),
            'city' => Str::random(12)
        ]);
    }
}
