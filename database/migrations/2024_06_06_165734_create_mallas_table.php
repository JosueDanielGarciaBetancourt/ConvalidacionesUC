<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Mallas', function (Blueprint $table) {
            $table->string('idMalla', 10)->primary(); // ID con hasta 10 caracteres máximo
            $table->unsignedInteger('anioMalla'); //2018
            $table->timestamps(); //created_at updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Mallas');
    }
};
