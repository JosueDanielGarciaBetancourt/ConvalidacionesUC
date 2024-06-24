<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarreraLocal_Curso extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $table = 'CarrerasLocales_Cursos';
    
    protected $primaryKey = 'idCarreraLocal_Curso'; 
    
    protected $fillable = [
        'idCarreraLocal_Curso',
        'idCarreraLocal',
        'idCurso',
    ];

    public function cursos()
    {
        return $this->belongsTo(Curso::class, 'idCurso');
    }

    public function carreralocal()
    {
        return $this->belongsTo(CarreraLocal::class, 'idCarreraLocal');
    }
}
