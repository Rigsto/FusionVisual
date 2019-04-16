<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->nama = 'admin';
        $role_admin->save();

        $role_user = new Role();
        $role_user->nama = 'user';
        $role_user->save();
    }
}
