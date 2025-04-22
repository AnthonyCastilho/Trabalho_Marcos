<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tamanhos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao'); // Ex: Pequena, Média, Grande
            $table->decimal('preco_extra', 4, 2); // Ex: 1.00, 1.25, 1.50 para multiplicar o preco_base
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
