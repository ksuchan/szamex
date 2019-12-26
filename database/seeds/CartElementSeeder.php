<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CartElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cart_elements')->insert([
            'Id' => 1,
            'OrdinalNumber' => 1,
            'CartId' => 1,
            'ProductId' => 1,
            'RestaurantId' => 1,
            'Amount' => 1,
            'Price' => 1,
            'CartElementStatusId' => 1
        ]);
        DB::table('cart_elements')->insert([
            'Id' => 2,
            'OrdinalNumber' => 2,
            'CartId' => 1,
            'ProductId' => 3,
            'RestaurantId' => 1,
            'Amount' => 1,
            'Price' => 1,
            'CartElementStatusId' => 1
        ]);
    }
}
