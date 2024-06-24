<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Postulantes', function (Blueprint $table) {
            $table->string('idPostulante', 8)->primary(); // 77043114
            $table->string('nombrePostulante', 100); //100 caracteres máximo
            $table->string('carreraProcedenciaPostulante', 100); //100 caracteres máximo
            $table->string('institucionProcedenciaPostulante', 100); //100 caracteres máximo
            $table->timestamps(); //created_at updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Postulantes');
    }
};
