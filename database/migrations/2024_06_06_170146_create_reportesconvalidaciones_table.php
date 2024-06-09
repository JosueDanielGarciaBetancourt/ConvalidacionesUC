<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ReportesConvalidaciones', function (Blueprint $table) {
            $table->string('idReporteConvalidacion', 23)->primary(); //0001-77043114-Malla2018
            $table->string('idPostulante', 8)->nullable(); //77043114
            $table->string('idMalla', 10)->nullable(); //Malla2018
            
            $table->foreign('idPostulante')->references('idPostulante')->on('Postulantes')->onDelete('set null');
            $table->foreign('idMalla')->references('idMalla')->on('Mallas')->onDelete('set null');

            $table->datetime('fechaHoraReporteConvalidacion')->default(now()); // Corrección aquí
            $table->text('rutaArchivoPDF');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ReportesConvalidaciones');
    }
};

