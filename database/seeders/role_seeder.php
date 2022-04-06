<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class role_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Superuser']);
        $role2 = Role::create(['name' => 'Admin']);

        Permission::create(['name' => 'Gestionar Roles'])->syncRoles([$role1]);
    }
}
