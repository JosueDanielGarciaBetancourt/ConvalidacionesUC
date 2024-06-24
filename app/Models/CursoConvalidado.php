<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoConvalidado extends Model
{
    use HasFactory;

    protected $table = "CursosConvalidados";
    
    protected $primaryKey = 'idCursoPostulante';

    protected $fillable = [
        'idCursoPostulante',
        'anioMallaCursoPostulante',
        'nombreCursoPostulante',
        'idCursoLocal',
        'idAnioMallaCursoLocal',
        'nombreCursoLocal',
        'porcentajeSimilitud',
        'anioMallaSolicitada', 
    ];

    public function cursos()
    {
        return $this->belongsTo(Curso::class, 'idCursoLocal', 'idCurso');
    }
}
