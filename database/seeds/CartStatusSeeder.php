<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CartStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cart_statuses')->insert([
            'Id' => 1,
            'Name' => 'Nowy'
        ]);
        DB::table('cart_statuses')->insert([
            'Id' => 2,
            'Name' => 'Zrealizowany'
        ]);
        DB::table('cart_statuses')->insert([
            'Id' => 3,
            'Name' => 'Usunięty'
        ]);
    }
}
