<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'superadministrator']);
        $role->givePermissionTo('users_manage');
        $role = Role::create(['name' => 'administrator']);
        $role->givePermissionTo('users_manage');
        $role = Role::create(['name' => 'editor']);
        // $role->givePermissionTo('users_manage');
        $role = Role::create(['name' => 'author']);
        // $role->givePermissionTo('users_manage');
        $role = Role::create(['name' => 'contributer']);
        // $role->givePermissionTo('users_manage');
        $role = Role::create(['name' => 'subscriber']);
        // $role->givePermissionTo('users_manage');
        $role = Role::create(['name' => 'guest']);
        // $role->givePermissionTo('users_manage');

    }
}
