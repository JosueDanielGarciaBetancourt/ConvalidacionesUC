<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('SilabosPostulantes', function (Blueprint $table) {
            $table->string('idSilaboPostulante', 15)->primary(); //curso123-2024

            $table->string('idCursoPostulante', 10)->unique();
            $table->foreign('idCursoPostulante')->references('idCursoPostulante')->on('CursosPostulantes')->onDelete('cascade');

            $table->text('sumillaSilaboPostulante');
            $table->text('referenciasSilaboPostulante');
            $table->unsignedInteger('anioSilaboPostulante');
            $table->timestamps(); //created_at updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('SilabosPostulantes');
    }
};
