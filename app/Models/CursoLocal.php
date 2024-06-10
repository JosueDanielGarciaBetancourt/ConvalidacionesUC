<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoLocal extends Model
{
    use HasFactory;
    
    public $incrementing = false;

    protected $table = 'CursosLocales';
    
    protected $primaryKey = ['idCursoLocal', 'idMalla']; 
    
    protected $fillable = [
        'idCursoLocal',
        'idMalla',
        'periodoCursoLocal',
        'nombreCursoLocal',
        'horasTeoricasCursoLocal',
        'horasPracticasCursoLocal',
        'creditosCursoLocal',
        'tipoCursoLocal',
        'sumillaSilabo_CursoLocalMalla',
        'rutaSilaboPDF_CursoLocalMalla',
    ];
}
