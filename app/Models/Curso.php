<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    
    public $incrementing = false;

    protected $table = 'Cursos';
    
    protected $primaryKey = ['idCurso', 'anioMalla_Curso']; 
    
    protected $fillable = [
        'idCurso',
        'anioMalla_Curso',
        'tipoCurso',
        'periodoCurso',
        'nombreCurso',
        'horasTeoricasCurso',
        'horasPracticasCurso',
        'creditosCurso',
        'caracterCurso',
        'sumillaSilabo_Curso',
        'estadoCurso',
        'rutaSilaboPDF_Curso',
    ];

     // Relación de uno a muchos
     public function carreraslocalesCursos() {
        return $this->hasMany('App\Models\CarreraLocal_Curso');
    } 

    public function cursosConvalidados() {
        return $this->hasMany('App\Models\CursoConvalidado');
    } 

    public function postulantesCursos() {
        return $this->hasMany('App\Models\PostulanteCurso');
    } 
}
