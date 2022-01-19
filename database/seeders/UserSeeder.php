<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@shoex.com',
            'password' => Hash::make('admin123'),
            'role' => 'ADMIN',
        ]);

        User::create([
            'name' => 'Strelizia',
            'email' => 'strelizia@shoex.com',
            'password' => Hash::make('strelizia123'),
            'role' => 'MEMBER',
        ]);
    }
}
