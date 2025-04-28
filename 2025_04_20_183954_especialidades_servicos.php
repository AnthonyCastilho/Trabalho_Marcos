<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('especialidade_servicos', function (Blueprint $table) {
            $table->foreignId('especialidade_id')
                ->constrained('especialidades')
                ->onDelete('cascade');

            $table->foreignId('servico_id')
                ->constrained('servicos')
                ->onDelete('cascade');
            
            $table->primary(['especialidade_id', 'servico_id']);
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('especialidade_servicos');
    }
};
