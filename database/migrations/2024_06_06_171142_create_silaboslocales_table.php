<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('SilabosLocales', function (Blueprint $table) {
            $table->string('idSilaboLocal', 15)->primary(); //ASUC00316-2024

            $table->string('idCursoLocal', 10)->unique();
            $table->foreign('idCursoLocal')->references('idCursoLocal')->on('CursosLocales')->onDelete('cascade');

            $table->text('sumillaSilaboLocal');
            $table->unsignedInteger('anioSilaboLocal');
            $table->text('referenciasSilaboLocal');
            $table->timestamps(); //created_at updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('SilabosLocales');
    }
};
