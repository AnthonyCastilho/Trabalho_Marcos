<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pedidoPizzaModel extends Model
{
    protected $table = "pedido_pizzas";
    protected $fillable = ['pedido_id', 'pizza_id', 'tamanho_id', 'quantidade'];

    public function pedido()
    {
        return $this->belongsTo(pedidoModel::class);
    }

    public function pizza()
    {
        return $this->belongsTo(pizzaModel::class);
    }

    public function tamanho()
    {
        return $this->belongsTo(tamanhoModel::class);
    }
}


