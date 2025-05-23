<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('agendamento_servicos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agendamento_id')->constrained('agendamentos')->onDelete('cascade');
            $table->foreignId('especialidade_id')->constrained('especialidades')->onDelete('cascade');
            $table->foreignId('plano_id')->constrained('planos')->onDelete('cascade');
            $table->integer('quantidade')->default(1);

            $table->unique(['agendamento_id', 'especialidade_id', 'plano_id']);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agendamento_servicos');
    }
};
