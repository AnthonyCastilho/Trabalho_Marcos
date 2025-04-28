<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TamanhoModel extends Model
{
    protected $table = "tamanhos";
    protected $fillable = ['descricao', 'preco_extra'];

    public function pedidosConsultas()
    {
        return $this->hasMany(PedidoConsulta::class);
    }

}
