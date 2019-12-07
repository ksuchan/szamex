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
        DB::table('order_status')->insert([
            'Id' => 1,
            'Name' => 'Nowe'
        ]);
        DB::table('order_status')->insert([
            'Id' => 2,
            'Name' => 'Przyjęte'
        ]);
        DB::table('order_status')->insert([
            'Id' => 3,
            'Name' => 'W realizacji'
        ]);
        DB::table('order_status')->insert([
            'Id' => 4,
            'Name' => 'W drodze'
        ]);
        DB::table('order_status')->insert([
            'Id' => 5,
            'Name' => 'Dostarczone'
        ]);
        DB::table('order_status')->insert([
            'Id' => 6,
            'Name' => 'Anulowane'
        ]);
        DB::table('order_status')->insert([
            'Id' => 7,
            'Name' => 'Zamówienie odrzucone'
        ]);
    }
}
