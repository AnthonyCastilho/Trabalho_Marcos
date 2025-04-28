<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pacienteModel  extends Model
{
    protected $table = "pacientes";
    protected $fillable = ['nome', 'telefone', 'endereco'];

    public function pedidos()
    {
        return $this->hasMany(PedidoModel::class);
    }
}


