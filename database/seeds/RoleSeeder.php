<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            'role' => 'admin',
            'created_at' => now(),
        ]);

        Role::insert([
            'role' => 'user',
            'created_at' => now(),
        ]);
    }
}
