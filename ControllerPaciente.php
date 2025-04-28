<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function __construct(Paciente $paciente)
    {
        $this->paciente = $paciente;
    }

    public function index()
    {
        $pacientes = $this->paciente->all();
        return view('paciente.index', ['pacientes' => $pacientes]);
    }

    public function create()
    {
        return view('paciente.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'nullable|string|max:15',
            'endereco' => 'nullable|string',
            'data_nascimento' => 'nullable|date',
            'email' => 'nullable|email|max:255',
        ]);

        Paciente::create($request->all());
        return redirect()->route('pacientes.index')->with('success', 'Paciente criado com sucesso.');
    }

    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('paciente.edit', compact('paciente'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'nullable|string|max:15',
            'endereco' => 'nullable|string',
            'data_nascimento' => 'nullable|date',
            'email' => 'nullable|email|max:255',
        ]);

        $paciente = Paciente::findOrFail($id);
        $paciente->update($request->all());
        return redirect()->route('pacientes.index')->with('success', 'Paciente atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();
        return redirect()->route('pacientes.index')->with('success', 'Paciente removido com sucesso.');
    }
}

