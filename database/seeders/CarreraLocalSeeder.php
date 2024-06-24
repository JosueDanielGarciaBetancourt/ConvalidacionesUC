<?php

namespace Database\Seeders;

use App\Models\CarreraLocal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarreraLocalSeeder extends Seeder
{
    public function run(): void
    {
        $carreraLocal1 = new CarreraLocal;
        $carreraLocal2 = new CarreraLocal;

        $carreraLocal1->idCarreraLocal = '103'; 
        $carreraLocal1->nombreCarreraLocal = 'Ingeniería de Sistemas e Informática';
        
        $carreraLocal2->idCarreraLocal = '105'; 
        $carreraLocal2->nombreCarreraLocal = 'Ingeniería Civil';

        $carreraLocal1->save();
        $carreraLocal2->save();
    }
}
