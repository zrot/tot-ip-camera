<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
        $role_client = new Role();
        $role_client->name = 'client';
        $role_client->description = 'A customer user';
        $role_client->save();

        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'A admin user';
        $role_admin->save();
    }
}
