<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clienteModel  extends Model
{
    protected $table = "clientes";
    protected $fillable = ['nome', 'telefone', 'endereco'];

    public function pedidos()
    {
        return $this->hasMany(PedidoModel::class);
    }
}


