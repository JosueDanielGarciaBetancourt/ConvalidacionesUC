<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarreraLocal extends Model
{
    use HasFactory;

    protected $table = "CarrerasLocales";

    protected $primaryKey = 'idCarreraLocal';

    protected $fillable = ['idCarreraLocal', 'nombreCarreraLocal'];

    // Relación de uno a muchos
    public function carreraslocalesCursos() {
        return $this->hasMany('App\Models\CarreraLocal_Curso');
    } 
}
