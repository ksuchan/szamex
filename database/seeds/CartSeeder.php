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
        if(DB::table('cart')->find(1)){
            DB::table('cart')->insert([
                'Id' => 1,
                'OrdinalNumber' => 1,
                'UserId' => 1,
                'CartStatusId' => 1
            ]);
        }
        if(DB::table('cart')->find(2)){
            DB::table('cart')->insert([
                'Id' => 2,
                'OrdinalNumber' => 2,
                'UserId' => 1,
                'CartStatusId' => 1
            ]);
        }
        if(DB::table('cart')->find(3)){
            DB::table('cart')->insert([
                'Id' => 3,
                'OrdinalNumber' => 3,
                'UserId' => 1,
                'CartStatusId' => 1
            ]);
        }
        if(DB::table('cart')->find(4)){
            DB::table('cart')->insert([
                'Id' => 4,
                'OrdinalNumber' => 5,
                'UserId' => 2,
                'CartStatusId' => 1
            ]);
        }
    }
}
