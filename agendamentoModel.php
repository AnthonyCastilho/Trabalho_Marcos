<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgendamentoServico extends Model
{
    protected $table = "agendamento_servicos"; // Nome da tabela no banco de dados

    protected $fillable = ['agendamento_id', 'servico_id', 'categoria_id'];

    public function agendamento()
    {
        return $this->belongsTo(Agendamento::class, 'agendamento_id');
    }

    public function servico()
    {
        return $this->belongsTo(Servico::class, 'servico_id');
    }

    public function categoria()
    {
        return $this->belongsTo(CategoriaServico::class, 'categoria_id');
    }
}

