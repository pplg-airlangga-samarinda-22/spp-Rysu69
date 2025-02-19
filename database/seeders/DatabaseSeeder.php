<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Petugas;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Petugas::create([
            'name' => 'adam',
            'email' => 'adam@gmail.com',
            'password' => Hash::make('password'),
            'nama_petugas' => 'adam',
            'level' => 'admin',
        ]);
    }
}
