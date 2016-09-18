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
    }

    protected function seedAdminRole()
    {
        $adminRole = Role::updateOrCreate(['name' => 'admin']);

        $editTermsAndConditions = Permission::updateOrCreate(['name' => 'edit terms-and-conditions']);

        $adminRole->givePermissionTo($editTermsAndConditions->name);
    }

    protected function seedClientRole()
    {
        $clientRole = Role::updateOrCreate(['name' => 'client']);

        $readTermsAndConditions = Permission::updateOrCreate(['name' => 'read terms-and-conditions']);

        $clientRole->givePermissionTo($readTermsAndConditions);
    }
}
