<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'List-roles',
            'Create-roles',
            'Edit-roles',
            'Delete-roles',
            'List-product',
            'Create-product',
            'Edit-product',
            'Delete-product',
            'Create-orders',
            'View-orders',
            'List-orders',
            'Delete-orders',
            'Deliver-orders',
            'Make-sales',
            'View-sales',
            'Edit-sales'
        ];


        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
