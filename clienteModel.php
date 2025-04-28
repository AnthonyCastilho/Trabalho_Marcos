<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = "pacientes";

    protected $fillable = ['nome', 'telefone', 'endereco'];

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class, 'paciente_id');
    }
}

