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
        App\User::create([

            'name'      => 'admin',
            'password'  => bcrypt('admin'),
            'email'     => 'admin@udemy-fourm.dev',
            'admin'     => 1,
            'avatar'    => '/avatars/avatar.png'
        ]);

        App\User::create([

            'name'      => 'Mohamed Zayed',
            'password'  => bcrypt('123'),
            'email'     => 'Z@z.com',
            'avatar'    => '/avatars/avatar.png'
        ]);
    }
}
