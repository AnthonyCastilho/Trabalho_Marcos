<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sabor', function (Blueprint $table) {
            $table->id(); // chave primária padrão
            $table->string('nome');
            $table->string('tipo');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sabor');
    }
};
