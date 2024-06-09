<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    
    public function convalidarCursos()
    {
        return view('dashboard.convalidarCursos');
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
