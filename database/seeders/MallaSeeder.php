<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CursoLocal;

class CarreraLocal_Seeder extends Seeder
{
    public function run(): void
    {
        $cursos2015 = $this->getCursos2015();

        foreach ($cursos2015 as $curso) {
            CursoLocal::create($curso);
        }
    }

    private function getCursos2015(): array
    {
        return [
            $this->crearCurso('ASUC00316', 'Malla1', 1, 'Introducción a la Ingeniería', 2, 2, 3, 'Obligatorio'),
            $this->crearCurso('ASUC00317', 'Malla1', 1, 'Cálculo I', 3, 1, 4, 'Obligatorio'),
            // Añade más cursos aquí utilizando el método crearCurso
        ];
    }

    private function crearCurso($id, $malla, $periodo, $nombre, $horasTeoricas, $horasPracticas, $creditos, $tipo): array
    {
        return [
            'idCursoLocal' => $id,
            'idMalla' => $malla,
            'periodoCursoLocal' => $periodo,
            'nombreCursoLocal' => $nombre,
            'horasTeoricasCursoLocal' => $horasTeoricas,
            'horasPracticasCursoLocal' => $horasPracticas,
            'creditosCursoLocal' => $creditos,
            'tipoCursoLocal' => $tipo
        ];
    }
}