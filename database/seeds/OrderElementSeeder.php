<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_element')->insert([
            'Id' => 1,
            'OrderId' => 1,
            'CartElementId' => 1,	
            'OrderElementStatusId' => 1
            'ProductId' => 1',
            'Price' => 99.9,
            'DiscountPrice' => 0.0,
            'Amount' => 1,
            'ProductId' => 1',	
        ]);
    }
}
