<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $table = 'agendamentos'; // Nome da tabela no banco

    protected $fillable = ['cliente_id', 'servico_id', 'data_agendamento', 'horario', 'status'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function servico()
    {
        return $this->belongsTo(Servico::class, 'servico_id');
    }
}
