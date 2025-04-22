<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class saborModel extends Model
{
    protected $table = 'sabor';
    protected $fillable = ['nome', 'tipo'];

    public function pizzas()
    {
        return $this->belongsToMany(related: pizzaModel::class);
    }
}


