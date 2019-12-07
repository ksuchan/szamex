<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order')->insert([
            'Id' => 1,
            'OrderCode' => 'kod zamówienia',
            'CartId' => 1,
            'RestaurantId' => 1,
            'SupplierId' => 1,
            'TotalPrice' => 99.9,
            'DeliveryPrice' => 39.9,
            'OrderPrice' => 60.0,
            'DiscountPrice' => 0.0,
            'DeliveryTime' => '2019-12-10 16:30:00',
            'DeliveryAddress' => 'Opole ul. Ozimska 14.7',
            'DeliveryCity' => 'Opole',			
            'OrderStatusId' => 1
        ]);
    }
}
