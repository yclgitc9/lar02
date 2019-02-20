<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('cache:clear');
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        
        Permission::create(['name' => 'users_manage']);
        Permission::create(['name' => 'books_manage']);
        Permission::create(['name' => 'departments_manage']);
        Permission::create(['name' => 'employees_manage']);
        Permission::create(['name' => 'categories_manage']);
        Permission::create(['name' => 'products_manage']);
    }
}
