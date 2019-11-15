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
        DB::table('cart_element')->insert([
            'Id' => 1,
            'OrdinalNumber' => 1,
            'IdCart' => 1,
            'IdProduct' => 1,
            'IdRestaurant' => 1,
            'Amount' => 1,
            'Price' => 1,
            'IdCartElementStatus' => 1
        ]);
        DB::table('cart_element')->insert([
            'Id' => 2,
            'OrdinalNumber' => 2,
            'IdCart' => 1,
            'IdProduct' => 3,
            'IdRestaurant' => 1,
            'Amount' => 1,
            'Price' => 1,
            'IdCartElementStatus' => 1
        ]);
    }
}
