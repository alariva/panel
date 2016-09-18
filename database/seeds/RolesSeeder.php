<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedAdminRole();

        $this->seedClientRole();

        $this->seedPermissions();

        $this->seedAdminRolesPermissions();

        $this->seedClientRolesPermissions();
    }

    protected function seedAdminRole()
    {
        Role::updateOrCreate(['name' => 'admin']);
    }

    protected function seedClientRole()
    {
        Role::updateOrCreate(['name' => 'client']);
    }

    protected function seedPermissions()
    {
        Permission::updateOrCreate(['name' => 'edit terms-and-conditions']);
        Permission::updateOrCreate(['name' => 'read terms-and-conditions']);
    }

    protected function seedAdminRolesPermissions()
    {
        $admin = Role::findByName('admin');

        $permissions = [
            'read terms-and-conditions',
            'edit terms-and-conditions',
            ];

        $admin->syncPermissions($permissions);
    }

    protected function seedClientRolesPermissions()
    {
        $client = Role::findByName('client');

        $permissions = [
            'read terms-and-conditions',
            ];

        $client->syncPermissions($permissions);
    }
}
