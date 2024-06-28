<?php

namespace App\Http\Controllers;

use App\Models\Postulante;
use App\Models\CarreraLocal;
use App\Models\Curso;

class DashboardController extends Controller
{
    
    public function convalidarCursos()
    {
        $postulantes = Postulante::all();
        $carrerasaLocales = CarreraLocal::all();
        $cursos = Curso::all();
        return view('dashboard.convalidarCursos', 
                    compact('postulantes', 'carrerasaLocales', 'cursos'));
    }

    public function historialConvalidaciones()
    {
        return view('dashboard.historialConvalidaciones');
    }

    public function postulantesRegistrar()
    {
        return view('dashboard.postulantesRegistrar');
    }

    public function postulantesVisualizar()
    {
        return view('dashboard.postulantesVisualizar');
    }
}
