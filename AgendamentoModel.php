<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $table = 'agendamentos';

    protected $fillable = ['cliente_id', 'servico_id', 'data_agendamento', 'horario', 'status'];

    protected $dates = ['data_agendamento'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function servico()
    {
        return $this->belongsTo(Servico::class, 'servico_id');
    }

    public function getHorarioAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('H:i');
    }

    public function setHorarioAttribute($value)
    {
        $this->attributes['horario'] = \Carbon\Carbon::parse($value)->format('H:i');
    }
}
