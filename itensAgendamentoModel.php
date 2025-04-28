<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItensAgendamento extends Model
{
    protected $table = 'itens_agendamento';

    protected $fillable = ['agendamento_id', 'servico_id', 'quantidade'];

    public function agendamento()
    {
        return $this->belongsTo(Agendamento::class, 'agendamento_id');
    }

    public function servico()
    {
        return $this->belongsTo(Servico::class, 'servico_id');
    }
}
