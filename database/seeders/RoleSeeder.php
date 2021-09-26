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

        Role::create([
            'name' => 'cfo',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'gm',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'pm',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'purchasing',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'im',
            'guard_name' => 'web',
        ]);
    }
}
