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
        if(DB::table('cart_element')->find(1)){
            DB::table('cart_element')->insert([
                'Id' => 1,
                'Ordinal_Number' => 1,
                'Cart_Id' => 1,
                'Product_Id' => 1,
                'Restaurant_Id' => 1,
                'Amount' => 1,
                'Price' => 1,
                'Cart_Element_Status_Id' => 1
            ]);
        }
        if(DB::table('cart_element')->find(2)){
            DB::table('cart_element')->insert([
                'Id' => 2,
                'Ordinal_Number' => 2,
                'Cart_Id' => 1,
                'Product_Id' => 3,
                'Restaurant_Id' => 1,
                'Amount' => 1,
                'Price' => 1,
                'Cart_Element_Status_Id' => 1
            ]);
        }
    }
}
