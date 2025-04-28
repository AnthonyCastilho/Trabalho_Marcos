<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('especialidade_servicos', function (Blueprint $table) {
            $table->unsignedBigInteger('especialidade_id');
            $table->unsignedBigInteger('servico_id');

            $table->foreign('especialidade_id')
                ->references('id')
                ->on('especialidades')
                ->onDelete('cascade');

            $table->foreign('servico_id')
                ->references('id')
                ->on('servicos')
                ->onDelete('cascade');
            
            $table->primary(['especialidade_id', 'servico_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('especialidade_servicos');
    }
};
