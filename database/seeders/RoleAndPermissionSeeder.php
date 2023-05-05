<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create-tournaments']);
        Permission::create(['name' => 'edit-tournaments']);
        Permission::create(['name' => 'delete-tournaments']);

        Permission::create(['name' => 'create-teams']);
        Permission::create(['name' => 'edit-teams']);
        Permission::create(['name' => 'delete-teams']);

        $adminRole = Role::create(['name' => 'Admin']);

        $adminRole->givePermissionTo([
            'create-tournaments',
            'edit-tournaments',
            'delete-tournaments',
            'create-teams',
            'edit-teams',
            'delete-teams',
        ]);
    }
}
