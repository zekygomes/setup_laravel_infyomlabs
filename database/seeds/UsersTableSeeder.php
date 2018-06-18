<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Permission;
use App\Models\Role;

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
        $superAdminPermission = Permission::create([
            'name' => 'super_admin',
            'display_name' => 'Super Admin',
            'description' => 'Permissão absoluta'
        ]);

        $superAdminRole = Role::create([
            'name' => 'super_admin',
            'display_name' => 'Super Admin',
            'description' => 'Permissão absoluta'
        ]);

        $superAdminRole->attachPermission($superAdminPermission);

        $superAdmin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123123'),
        ]);

        $superAdmin->attachRole($superAdminRole);
    }
}