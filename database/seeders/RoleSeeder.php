<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
    /* \DB::table('roles')->insert([
        'name' => 'admin',
        'guard_name' => 'Администратор',
        ]);

    \DB::table('roles')->insert([
        'name' => 'manager',
        'guard_name' => 'Менеджер',
        ]);

    \DB::table('roles')->insert([
        'name' => 'user',
        'guard_name' => 'Пользователь',
        ]);
      */

      $role = Role::create(['name' => 'admins']);
      $role = Role::create(['name' => 'managers']);
      $role = Role::create(['name' => 'users']);
    }
}
