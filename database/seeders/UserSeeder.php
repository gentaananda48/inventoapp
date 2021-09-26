<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cfo = User::create([
            'name' => 'CFO',
            'email' => 'cfo@role.test',
            'password' => bcrypt('12345678'),
        ]);

        $cfo->assignRole('cfo');

        $gm = User::create([
            'name' => 'General Manager',
            'email' => 'gm@role.test',
            'password' => bcrypt('12345678'),
        ]);

        $gm->assignRole('gm');

        $pm = User::create([
            'name' => 'Purchasing Manager',
            'email' => 'pm@role.test',
            'password' => bcrypt('12345678'),
        ]);

        $pm->assignRole('pm');

        $purchasing = User::create([
            'name' => 'Purchasing',
            'email' => 'purchasing@role.test',
            'password' => bcrypt('12345678'),
        ]);

        $purchasing->assignRole('purchasing');

        $im = User::create([
            'name' => 'Inventory Manager',
            'email' => 'im@role.test',
            'password' => bcrypt('12345678'),
        ]);

        $im->assignRole('im');
        
    }
}
