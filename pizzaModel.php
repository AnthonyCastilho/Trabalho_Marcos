<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lancheModel extends Model
{
    protected $table = 'lanches';

    protected $fillable = ['nome', 'descricao', 'preco_base'];


    public function pedidoLanches()
    {
        return $this->hasMany(lancheModel::class);
    }
}



