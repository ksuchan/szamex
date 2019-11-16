<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = config('roles.models.role')::where('slug', '=', 'user')->first();
        $delivererRole = config('roles.models.role')::where('slug', '=', 'deliverer')->first();
        $restaurantRole = config('roles.models.role')::where('slug', '=', 'restaurant')->first();
        $adminRole = config('roles.models.role')::where('slug', '=', 'admin')->first();

        /*
         * Add Users
         *
         */
        if (config('roles.models.defaultUser')::where('email', '=', 'admin@admin.com')->first() === null) {
            $newUser = config('roles.models.defaultUser')::create([
                'name'     => 'Admin',
                'email'    => 'admin@admin.com',
                'password' => bcrypt('password'),
            ]);

            $newUser->attachRole($adminRole);
            $newUser->attachRole($userRole);
        }

        if (config('roles.models.defaultUser')::where('email', '=', 'user@user.com')->first() === null) {
            $newUser = config('roles.models.defaultUser')::create([
                'name'     => 'User',
                'email'    => 'user@user.com',
                'password' => bcrypt('password'),
            ]);

            $newUser;
            $newUser->attachRole($userRole);
        }

        if (config('roles.models.defaultUser')::where('email', '=', 'deliverer@deliverer.com')->first() === null) {
            $newUser = config('roles.models.defaultUser')::create([
                'name'     => 'Deliverer',
                'email'    => 'deliverer@deliverer.com',
                'password' => bcrypt('password'),
            ]);

            $newUser;
            $newUser->attachRole($delivererRole);
            $newUser->attachRole($userRole);
        }

        if (config('roles.models.defaultUser')::where('email', '=', 'restaurant@restaurant.com')->first() === null) {
            $newUser = config('roles.models.defaultUser')::create([
                'name'     => 'Restaurant',
                'email'    => 'restaurant@restaurant.com',
                'password' => bcrypt('password'),
            ]);

            $newUser;
            $newUser->attachRole($restaurantRole);
            $newUser->attachRole($userRole);
        }
    }
}
