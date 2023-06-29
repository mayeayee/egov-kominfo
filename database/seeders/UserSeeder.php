<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // "System Analyst", "Programmer", "Quality Assurance"
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'role' => 'Super Admin',
            'status' => 'aktif',
        ]);
        User::create([
            'name' => 'Project Manager',
            'email' => 'pm@pm.com',
            'password' => bcrypt('password'),
            'role' => 'Project Manager',
            'status' => 'aktif',
        ]);
        User::create([
            'name' => 'System Analyst',
            'email' => 'sa@sa.com',
            'password' => bcrypt('password'),
            'role' => 'System Analyst',
            'status' => 'aktif',
        ]);
        User::create([
            'name' => 'Quality Assurance',
            'email' => 'qa@qa.com',
            'password' => bcrypt('password'),
            'role' => 'Quality Assurance',
            'status' => 'aktif',
        ]);
        User::create([
            'name' => 'Programmer',
            'email' => 'pg@pg.com',
            'password' => bcrypt('password'),
            'role' => 'Programmer',
            'status' => 'aktif',
        ]);
        User::create([
            'name' => 'Programmer A',
            'email' => 'pga@pg.com',
            'password' => bcrypt('password'),
            'role' => 'Programmer',
            'status' => 'aktif',
        ]);
        User::create([
            'name' => 'Programmer B',
            'email' => 'pgb@pg.com',
            'password' => bcrypt('password'),
            'role' => 'Programmer',
            'status' => 'aktif',
        ]);
        User::create([
            'name' => 'Programmer C',
            'email' => 'pgc@pg.com',
            'password' => bcrypt('password'),
            'role' => 'Programmer',
            'status' => 'aktif',
        ]);
    }
}
