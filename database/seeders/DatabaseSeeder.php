<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Mahasiswa;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        User::create([
            'username' => 'admin',
            'role' => 'admin',
            'password' => bcrypt('1234'),
        ]);
        User::create([
            'username' => 'd1041211005',
            'role' => 'user',
            'password' => bcrypt('dawam'),
        ]);
    }
}
