<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Malla;

class MallaSeeder extends Seeder
{
    public function run(): void
    {
        $mallas = [
            ['idMalla' => 'Malla1', 'anioMalla' => 2015],
            ['idmalla' => 'Malla2', 'anioMalla' => 2018],
            ['idmalla' => 'Malla3', 'anioMalla' => 2018],
        ];

        foreach ($mallas as $malla) {
            Malla::create($malla);
        }
    }
}