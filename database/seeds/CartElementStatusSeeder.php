<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CartElementStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('cart_element_status')->find(1)){
            DB::table('cart_element_status')->insert([
                'Id' => 1,
                'Name' => 'Nowy'
            ]);
        }
        if(DB::table('cart_element_status')->find(2)){
            DB::table('cart_element_status')->insert([
                'Id' => 2,
                'Name' => 'Zrealizowany'
            ]);
        }
        if(DB::table('cart_element_status')->find(3)){
            DB::table('cart_element_status')->insert([
                'Id' => 3,
                'Name' => 'Usunięty'
            ]);
        }
    }
}
