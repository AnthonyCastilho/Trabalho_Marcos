<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pedidoModel extends Model
{
    protected $table = 'pedidos';

    protected $fillable = ['cliente_id', 'data_pedido', 'status', 'valor_total'];

    public function cliente()
    {
        return $this->belongsTo(clienteModel::class, 'cliente_id');
    }


}
