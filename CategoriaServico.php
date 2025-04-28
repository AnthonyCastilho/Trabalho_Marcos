<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaServico extends Model
{
    use HasFactory;

    protected $fillable = ['descricao'];

    public function servicos()
    {
        return $this->hasMany(Servico::class);
    }
}
