<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Paciente;
use App\Models\Servico;
use Illuminate\Http\Request;

class ControllerAgendamento extends Controller
{
    public function index()
    {
        $pacientes = Paciente::all();
        $servicos = Servico::all();

        return view('agendamentos.index', [
            'pacientes' => $pacientes,
            'servicos' => $servicos
        ]);
    }

    public function create()
    {
        $pacientes = Paciente::all();
        $servicos = Servico::all();

        return view('agendamentos.create', [
            'pacientes' => $pacientes,
            'servicos' => $servicos
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'servico_id' => 'required|exists:servicos,id',
            'data_agendamento' => 'required|date',
            'horario' => 'required'
        ]);
    
        Agendamento::create([
            'paciente_id' => $request->paciente_id,
            'servico_id' => $request->servico_id,
            'data_agendamento' => $request->data_agendamento,
            'horario' => $request->horario,
            'status' => 'Pendente'
        ]);
    
        return redirect()->route('agendamentos.index')->with('success', 'Agendamento criado com sucesso!');
    }

    public function edit($id)
    {
        $agendamento = Agendamento::findOrFail($id);
        
        return view('agendamentos.edit', compact('agendamento'));
    }

    public function update(Request $request, $id)
    {
        $agendamento = Agendamento::findOrFail($id);

        $agendamento->update([
            'status' => $request->status,
        ]);
    
        return redirect()->route('agendamentos.index')->with('success', 'Agendamento atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $agendamento = Agendamento::findOrFail($id);
        
        $agendamento->delete();
    
        return redirect()->route('agendamentos.index')->with('success', 'Agendamento excluído com sucesso!');
    }
}
