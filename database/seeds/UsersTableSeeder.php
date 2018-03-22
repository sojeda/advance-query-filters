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
        factory(App\User::class, 50)->make()->each(function ($user) {
            $user->flights()->save(factory(App\Flight::class)->make());
        });
    }
}
