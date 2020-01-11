<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   

        $this->call('PermissionsTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('ConnectRelationshipsSeeder');
        $this->call('CartStatusSeeder');
        $this->call('CartSeeder');
        $this->call('CartElementStatusSeeder');
        $this->call('CartElementSeeder');
        $this->call('OrderStatusSeeder');
        $this->call('OrderSeeder');
        $this->call('OrderElementSeeder');
        $this->call('RestarurantSeeder');
        $this->call('DishSeeder');

    }
}
