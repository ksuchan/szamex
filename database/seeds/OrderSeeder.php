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
        if(DB::table('order')->find(1) === null){
            DB::table('order')->insert([
                'Id' => 1,
                'order_code' => 'kod zamówienia',
                'cart_id' => 1,
                'restaurant_id' => 1,
                'supplier_id' => 1,
                'Total_price' => 99.9,
                'Delivery_Price' => 39.9,
                'Order_Price' => 60.0,
                'Discount_Price' => 0.0,
                'Delivery_Time' => '2019-12-10 16:30:00',
                'Delivery_Address' => 'Opole ul. Ozimska 14.7',
                'Delivery_City' => 'Opole',			
                'Order_Status_Id' => 1,
                'Phone_Number' => '123123123',
                'Payment' => 'card',
                'delivery' => 'own',
                'user_id' => 1
            ]);
        }
    }
}
