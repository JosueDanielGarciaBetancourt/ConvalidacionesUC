<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Postulante extends Model
{
    use HasFactory;

    protected $table = "Postulantes";
    
    protected $primaryKey = 'idPostulante';

    protected $fillable = [
        'idPostulante',
        'nombrePostulante',
        'carreraProcedenciaPostulante',
        'institucionProcedenciaPostulante',
    ];

    // Relación de uno a muchos
    public function postulantesCursos() {
        return $this->hasMany('App\Models\PostulanteCurso');
    }   

    public function reportesconvalidaciones() {
        return $this->hasMany('App\Models\ReporteConvalidacion');
    }
}
