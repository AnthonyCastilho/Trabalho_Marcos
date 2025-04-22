<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class itensPedidoModel extends Model
{
    protected $table = 'itens_pedido';

    protected $fillable = ['pedido_id', 'pizza_id', 'tamanho_id', 'quantidade'];

    public function pedido()
    {
        return $this->belongsTo(PedidoModel::class, 'pedido_id');
    }

    public function pizza()
    {
        return $this->belongsTo(PizzaModel::class, 'pizza_id'); // ou ProdutoModel
    }

    public function tamanho()
    {
        return $this->belongsTo(TamanhoModel::class, 'tamanho_id');
    }
}
