<?php

namespace App\Http\Controllers;

use App\Models\EspecialidadeModel;
use Illuminate\Http\Request;

class EspecialidadeController extends Controller
{
    public function index()
    {
        $especialidades = EspecialidadeModel::all();
        return view('especialidade.index', compact('especialidades'));
    }

    public function create()
    {
        return view('especialidade.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:500',
        ]);

        EspecialidadeModel::create($request->all());

        return redirect()->route('especialidade.index')->with('success', 'Especialidade criada com sucesso!');
    }

    public function edit($id)
    {
        $especialidade = EspecialidadeModel::findOrFail($id);
        return view('especialidade.edit', compact('especialidade'));
    }

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

    public function destroy($id)
    {
        $especialidade = EspecialidadeModel::findOrFail($id);

        $especialidade->delete();

        return redirect()->route('especialidade.index')->with('success', 'Especialidade removida com sucesso!');
    }
}

