<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('especialidades', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->text('descricao')->nullable();
            $table->decimal('valor_consulta_base', 8, 2)->check('valor_consulta_base >= 0');
            $table->timestamps();
            
            $table->index('nome'); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('especialidades');
    }
};
