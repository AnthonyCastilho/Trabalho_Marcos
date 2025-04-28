<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensAgendamentoTable extends Migration
{
    public function up()
    {
        Schema::create('itens_agendamento', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agendamento_id')->constrained('agendamentos')->onDelete('cascade');
            $table->foreignId('especialidade_id')->constrained('especialidades')->onDelete('restrict');
            $table->foreignId('plano_id')->constrained('planos')->onDelete('restrict');
            $table->integer('quantidade')->default(1); // Quantidade de consultas ou procedimentos
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('itens_agendamento');
    }
}

