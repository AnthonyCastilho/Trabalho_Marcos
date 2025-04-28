<?php

namespace App\Http\Controllers;

use App\Models\EspecialidadeModel;
use Illuminate\Http\Request;

class EspecialidadeController extends Controller
{
    // Exibir lista de Especialidades
    public function index()
    {
        $especialidades = EspecialidadeModel::all();
        return view('especialidade.index', compact('especialidades'));
    }

    // Exibir formulário para criação de nova Especialidade
    public function create()
    {
        return view('especialidade.create');
    }

    // Salvar nova Especialidade no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:500',
        ]);

        EspecialidadeModel::create($request->all());
        return redirect()->route('especialidade.index')->with('success', 'Especialidade criada com sucesso!');
    }

    // Atualizar dados da Especialidade
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:500',
        ]);

        $especialidade = EspecialidadeModel::findOrFail($id);
        $especialidade->update($request->all());
        return redirect()->route('especialidade.index')->with('success', 'Especialidade atualizada com sucesso!');
    }

    // Remover uma Especialidade
    public function destroy($id)
    {
        $especialidade = EspecialidadeModel::findOrFail($id);
        $especialidade->delete();
        return redirect()->route('especialidade.index')->with('success', 'Especialidade removida com sucesso!');
    }
}
