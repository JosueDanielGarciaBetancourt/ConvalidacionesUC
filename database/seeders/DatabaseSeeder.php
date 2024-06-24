<?php

namespace Database\Seeders;

use App\Models\CarreraLocal;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(CarreraLocalSeeder::class);
        $this->call(PostulanteSeeder::class);
        $this->call(CursoSeeder::class);
    }
}
