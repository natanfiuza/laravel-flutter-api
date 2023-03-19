<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::updateOrCreate([
            'email' => 'admin@natanfiuza.dev.br'
        ], [
            'name' => 'Admin',
            'email' => 'admin@natanfiuza.dev.br',
            'password' => bcrypt('abc123'),
            'user_type' => bcrypt('abc123'),
        ]);
    }
}
