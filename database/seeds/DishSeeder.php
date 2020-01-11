<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        DB::table('dishes')->insert([
            'name' => Str::random(15),
            'ingredients' => Str::random(126),
            'price' => rand(0.2, 45.5),
            'gluten' => rand(0,1),
            'vegan' => rand(0,1),
            'spicy' => rand(0,1),
            'restaurant_id' => 1
        ]);
    }
}
