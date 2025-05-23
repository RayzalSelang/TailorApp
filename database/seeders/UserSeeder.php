<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'roles' => 'admin',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'name' => 'Penjahit',
            'username' => 'penjahit',
            'email' => 'penjahit@gmail.com',
            'roles' => 'penjahit',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'name' => 'Pelanggan',
            'username' => 'pelanggan',
            'email' => 'pelanggan@gmail.com',
            'roles' => 'pelanggan',
            'password' => bcrypt('123'),
        ]);
    }
}
