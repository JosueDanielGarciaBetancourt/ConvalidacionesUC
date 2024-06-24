<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ReportesConvalidaciones', function (Blueprint $table) {
            $table->id(); 
            //En el controlador se manejará la lógica para generar
            //un idReporteConvalidacion autoincremental
            $table->string('idReporteConvalidacion')->unique(); //0001-77043114-Malla2015
            $table->string('idPostulante', 8)->nullable(); //77043114
            $table->string('anioMalla', 10); //2015
            $table->datetime('fechaHoraReporteConvalidacion')->default(now()); 
            $table->text('rutaArchivoPDF'); //../ReportesPDF/0001-77043114-2015.pdf

            $table->foreign('idPostulante')->references('idPostulante')->on('Postulantes')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ReportesConvalidaciones');
    }
};

