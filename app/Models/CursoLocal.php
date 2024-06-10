<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoLocal extends Model
{
    use HasFactory;

    protected $table = 'CursosLocales';
    
    protected $primaryKey = 'idCursoLocal';

    protected $fillable = [
        'idCursoLocal',
        'idMalla',
        'periodoCursoLocal',
        'nombreCursoLocal',
        'horasTeoricasCursoLocal',
        'horasPracticasCursoLocal',
        'creditosCursoLocal',
        'tipoCursoLocal',
    ];
}
