<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('planos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao', 255);
            $table->decimal('acrescimo_valor', 4, 2)->default(1.00)->check('acrescimo_valor >= 0');
            $table->timestamps();

            $table->index('descricao');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('planos');
    }
};
