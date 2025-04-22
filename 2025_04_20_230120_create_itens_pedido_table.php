<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensPedidoTable extends Migration
{
    public function up()
    {
        Schema::create('itens_pedido', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pedido_id')->constrained('pedidos')->onDelete('cascade');
            $table->foreignId('pizza_id')->constrained('pizzas')->onDelete('restrict');
            $table->foreignId('tamanho_id')->constrained('tamanhos')->onDelete('restrict');
            $table->integer('quantidade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('itens_pedido');
    }
}


