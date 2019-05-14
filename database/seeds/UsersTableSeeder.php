<?php

use dzuko\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'lstephen1214@gmail.com')->first();

        if(!$user) {
            User::create([
                'name' => 'Stephenoo',
                'email' => 'lstephen1214@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin'
            ]);
        }
    }
}
