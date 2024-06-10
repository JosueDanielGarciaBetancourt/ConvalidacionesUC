<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(CarreraLocal_Seeder::class);
        $this->call(MallaSeeder::class);
        $this->call(PostulanteSeeder::class);
        $this->call(CursoLocal_Seeder::class);
    }
}
