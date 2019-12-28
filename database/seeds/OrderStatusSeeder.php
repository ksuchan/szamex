<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('order_status')->find(1) === null){
            DB::table('order_status')->insert([
                'Id' => 1,
                'Name' => 'Nowe'
            ]);
        }
        if(DB::table('order_status')->find(2) === null){
            DB::table('order_status')->insert([
                'Id' => 2,
                'Name' => 'Przyjęte'
            ]);
        }
        if(DB::table('order_status')->find(3) === null){
            DB::table('order_status')->insert([
                'Id' => 3,
                'Name' => 'W realizacji'
            ]);
            }
        if(DB::table('order_status')->find(4)){
            DB::table('order_status')->insert([
                'Id' => 4,
                'Name' => 'W drodze'
            ]);
        }
        if(DB::table('order_status')->find(5)){
            DB::table('order_status')->insert([
                'Id' => 5,
                'Name' => 'Dostarczone'
            ]);
        }
        if(DB::table('order_status')->find(6)){
            DB::table('order_status')->insert([
                'Id' => 6,
                'Name' => 'Anulowane'
            ]);
        }
        if(DB::table('order_status')->find(7)){
            DB::table('order_status')->insert([
                'Id' => 7,
                'Name' => 'Zamówienie odrzucone'
            ]);
        }
    }
}
