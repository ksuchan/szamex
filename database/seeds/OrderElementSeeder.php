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
        if(DB::table('order_element')->find(1) === null){
            DB::table('order_element')->insert([
                'Id' => 1,
                'Order_Id' => 1,
                'Cart_Element_Id' => 1,	
                'Order_Element_Status_Id' => 1,
                'dish_id' => 1,
                'Price' => 99.9,
                'Discount_Price' => 0.0,
                'Amount' => 1,
                'Restaurant_Id' => 1
            ]);
        }
    }
}
