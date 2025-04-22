<?php

namespace App\Http\Controllers;

use App\Models\Tamanho;
use App\Models\TamanhoModel;
use Illuminate\Http\Request;

class TamanhoController extends Controller
{
    // Exibir lista de tamanhos
    public function index()
    {
        $tamanhos = tamanhoModel::all();
        return view('tamanhoIndex', compact('tamanhos'));
    }

    // Exibir formulário para criação de novo tamanho
    public function create()
    {
        return view('tamanhoCreate');
    }

    // Salvar novo tamanho no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required|string|max:255',
        ]);

        tamanhoModel::create($request->all());
        return redirect()->route('tamanho.index');
    }

   
    // Atualizar dados do tamanho
    public function update(Request $request, $id)
    {
        $request->validate([
            'descricao' => 'required|string|max:255',
        ]);

        $tamanho = tamanhoModel::findOrFail($id);
        $tamanho->update($request->all());
        return redirect()->route('tamanho.index');
    }

    // Remover um tamanho
    public function destroy($id)
    {
        $tamanho = tamanhoModel::findOrFail($id);
        $tamanho->delete();
        return redirect()->route('tamanho.index');
    }
}
