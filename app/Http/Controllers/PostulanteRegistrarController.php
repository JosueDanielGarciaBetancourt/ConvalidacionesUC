<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postulante;

class PostulanteRegistrarController extends Controller
{
    public function create()
    {
        return view('dashboard.postulantesRegistrar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'idPostulante' => 'required|string|max:255',
            'nombrePostulante' => 'required|string|max:255',
            'carreraProcedenciaPostulante' => 'required|string|max:255',
            'institucionProcedenciaPostulante' => 'required|string|max:255',
        ]);

        $postulante = new Postulante();
        $postulante->idPostulante = $request->idPostulante;
        $postulante->nombrePostulante = $request->nombrePostulante;
        $postulante->carreraProcedenciaPostulante = $request->carreraProcedenciaPostulante;
        $postulante->institucionProcedenciaPostulante = $request->institucionProcedenciaPostulante;
        $postulante->save();

        return redirect()->route('postulantesRegistrar.create')->with('success', 'Postulante registrado con éxito.');
    }
}
