<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarreraLocal;

class CarreraLocal_Seeder extends Seeder
{
    public function run(): void
    {
        $carrerasLocales = [
            ['idCarreraLocal' => '103', 'nombreCarreraLocal' => 'Ingeniería de Sistemas e Informática'],
            ['idCarreraLocal' => '105', 'nombreCarreraLocal' => 'Ingeniería Civil'],
        ];

        foreach ($carrerasLocales as $carrera) {
            CarreraLocal::create($carrera);
        }
    }
}
