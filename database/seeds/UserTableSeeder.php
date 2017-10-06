<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $role_client = Role::where('name', 'client')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $client = new User();
        $client->name = 'client yolo';
        $client->email = 'client@example.com';
        $client->password = bcrypt('clientPass');
        $client->save();
        $client->roles()->attach($role_client);

        $admin = new User();
        $admin->name = 'admin yolo';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('adminPass');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
