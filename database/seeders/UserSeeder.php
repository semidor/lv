<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(100)->create()->each(function ($user) {
            $user->assignRole('users');
        });
        User::factory()->count(4)->create()->each(function ($user) {
            $user->assignRole('managers');
        });
    }
}
