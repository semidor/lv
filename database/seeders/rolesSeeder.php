<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
      \DB::table('roles')->insert([
        'name' => 'Администратор',
        'guard_name' => 'admin',
        ]);

    \DB::table('roles')->insert([
        'name' => 'Менеджер',
        'guard_name' => 'manager',
        ]);

    \DB::table('roles')->insert([
        'name' => 'Пользователь',
        'guard_name' => 'user',
        ]);
      
    }
}
