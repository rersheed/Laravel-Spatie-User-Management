<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'author']);
        Role::create(['name' => 'reviewer']);

        // Permissions
        Permission::create(['name' => 'create papers']);
        Permission::create(['name' => 'edit papers']);
        Permission::create(['name' => 'delete papers']);
        Permission::create(['name' => 'publish papers']);

        // Assign Permissions to Roles
        Role::findByName('admin')->givePermissionTo(['publish papers', 'create papers', 'edit papers', 'delete papers']);
        Role::findByName('author')->givePermissionTo(['create papers', 'edit papers']);
        Role::findByName('reviewer')->givePermissionTo('edit papers');

        // $role = Role::create(['name' => 'super-admin']);
        // $role->givePermissionTo(Permission::all());
    }
}
