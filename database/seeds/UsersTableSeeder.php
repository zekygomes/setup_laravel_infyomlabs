<?php

use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: dev
 * Date: 6/6/18
 * Time: 1:24 AM
 */

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        \App\User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123123'),
        ]);
    }
}