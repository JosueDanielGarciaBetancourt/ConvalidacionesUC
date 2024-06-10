<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Postulante;

class PostulanteSeeder extends Seeder
{
    public function run(): void
    {
        $postulante1 = new Postulante;
        $postulante2 = new Postulante;

        $postulante1->idPostulante = '74465364'; 
        $postulante1->nombrePostulante = "Contreras Cerrón David";
        $postulante1->carreraProcedenciaPostulante = "Ingeniería de Sistemas";
        $postulante1->institucionProcedenciaPostulante = "Universidad Tecnológica del Perú";
        
        $postulante2->idPostulante = '12345678'; 
        $postulante2->nombrePostulante = "Juanito Alcachofa";
        $postulante2->carreraProcedenciaPostulante = "Ingeniería Civil";
        $postulante2->institucionProcedenciaPostulante = "Universidad Peruana Los Andes";
        
        $postulante1->save();
        $postulante2->save();
    }
}
