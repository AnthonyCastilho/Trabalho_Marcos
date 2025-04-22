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
        Schema::create('pizza_sabores', function (Blueprint $table) {
            $table->unsignedBigInteger('pizza_id');
            $table->unsignedBigInteger('sabor_id');
            // $table->primary(['pizza_id', 'sabor_id']);

            // Relacionamento com tabela pizzas
            $table->foreign('pizza_id')
                ->references('id')
                ->on('pizzas')
                ->onDelete('cascade');

            // Relacionamento com tabela sabor
            $table->foreign('sabor_id')
                ->references('sabor_id')
                ->on('sabor')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizza_sabores');
    }
};
