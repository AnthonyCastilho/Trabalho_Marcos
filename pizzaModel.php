<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    protected $table = 'especialidades';
    protected $fillable = ['nome', 'descricao'];

    public function medicos()
    {
        return $this->hasMany(Medico::class, 'especialidade_id');
    }
}



