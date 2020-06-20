<?php

use Illuminate\Database\Seeder;
use App\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['code'=>'UO1','name'=>'Add user']);
        Permission::create(['code'=>'UO2','name'=>'Delete user']);
        Permission::create(['code'=>'UO3','name'=>'Edit user']);

        Permission::create(['code'=>'PO1','name'=>'Add product']);
        Permission::create(['code'=>'PO2','name'=>'Delete product']);
        Permission::create(['code'=>'PO3','name'=>'Edit product']);

        Permission::create(['code'=>'CO1','name'=>'Add category']);
        Permission::create(['code'=>'CO2','name'=>'Delete category']);
        Permission::create(['code'=>'CO3','name'=>'Edit category']);

        Permission::create(['code'=>'RO1','name'=>'Add role']);
        Permission::create(['code'=>'RO2','name'=>'Delete role']);
        Permission::create(['code'=>'RO3','name'=>'Edit category']);

    }
  
}
