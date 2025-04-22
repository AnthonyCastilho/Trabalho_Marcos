<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tamanhoModel extends Model
{
    protected $table = "tamanhos";
    protected $fillable = ['descricao', 'preco_extra'];

    public function pedidoPizzas()
    {
        return $this->hasMany(pizzaModel::class);
    }
}
