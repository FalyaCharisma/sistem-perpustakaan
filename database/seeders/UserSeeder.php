<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'email_verified_at' => now()
        ])->assignRole('admin');

        User::create([
            'name' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('petugas'),
            'email_verified_at' => now()
        ])->assignRole('petugas');

        User::create([
            'name' => 'peminjam',
            'email' => 'peminjam@gmail.com',
            'password' => bcrypt('peminjam'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');
    }
}
