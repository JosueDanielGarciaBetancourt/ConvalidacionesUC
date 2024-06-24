<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostulanteCurso extends Model
{
    use HasFactory;

    protected $table = "Postulantes_Cursos";
    
    protected $primaryKey = 'idPostulanteCurso';

    protected $fillable = [
        'idPostulanteCurso',
        'idPostulante',
        'idCurso',
    ];

    public function cursos()
    {
        return $this->belongsTo(Curso::class, 'idCurso');
    }

    public function postulantes()
    {
        return $this->belongsTo(Postulante::class, 'idPostulante');
    }
}
