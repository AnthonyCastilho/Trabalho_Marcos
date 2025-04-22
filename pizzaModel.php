<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pizzaModel extends Model
{
    protected $table = 'pizzas';

    protected $fillable = ['nome', 'descricao', 'preco_base'];


    public function pedidoPizzas()
    {
        return $this->hasMany(pizzaModel::class);
    }
}



