<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReporteConvalidacion extends Model
{
    use HasFactory;

    protected $table = "ReportesConvalidaciones";
    
    protected $primaryKey = 'idReporteConvalidacion';

    protected $fillable = [
        'idReporteConvalidacion',
        'idPostulante',
        'fechaHoraReporteConvalidacion',
        'rutaArchivoPDF',
    ];
    
    public function postulante()
    {
        return $this->belongsTo(Postulante::class, 'idPostulante');
    }
}
