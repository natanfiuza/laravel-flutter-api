<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('user_types')->truncate();
        Schema::enableForeignKeyConstraints();
        \App\Models\UserType::insert([
            ["id" => 1, "name" => 'Administrador'],
            ["id" => 2, "name" => 'Editor'],
            ["id" => 3, "name" => 'Usuário'],
        ]);
    }
}
