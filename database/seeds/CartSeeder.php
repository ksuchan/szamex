<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cart')->insert([
            'Id' => 1,
            'OrdinalNumber' => 1,
            'IdUser' => 1,
            'IdCartStatus' => 1
        ]);
        DB::table('cart')->insert([
            'Id' => 2,
            'OrdinalNumber' => 2,
            'IdUser' => 1,
            'IdCartStatus' => 1
        ]);
        DB::table('cart')->insert([
            'Id' => 3,
            'OrdinalNumber' => 3,
            'IdUser' => 1,
            'IdCartStatus' => 1
        ]);
        DB::table('cart')->insert([
            'Id' => 4,
            'OrdinalNumber' => 5,
            'IdUser' => 2,
            'IdCartStatus' => 1
        ]);
    }
}
