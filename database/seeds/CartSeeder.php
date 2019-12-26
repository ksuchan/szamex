<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            'Id' => 1,
            'OrdinalNumber' => 1,
            'UserId' => 1,
            'CartStatusId' => 1
        ]);
        DB::table('carts')->insert([
            'Id' => 2,
            'OrdinalNumber' => 2,
            'UserId' => 1,
            'CartStatusId' => 1
        ]);
        DB::table('carts')->insert([
            'Id' => 3,
            'OrdinalNumber' => 3,
            'UserId' => 1,
            'CartStatusId' => 1
        ]);
        DB::table('carts')->insert([
            'Id' => 4,
            'OrdinalNumber' => 5,
            'UserId' => 2,
            'CartStatusId' => 1
        ]);
    }
}
