<?php

namespace App\Http\Controllers;

use App\Models\CategoriaServico;
use Illuminate\Http\Request;

class CategoriaServicoController extends Controller
{
    // Exibir lista de categorias
    public function index()
    {
        $categorias = CategoriaServico::all();
        return view('categorias.index', compact('categorias'));
    }

    // Exibir formulário para criação de nova categoria
    public function create()
    {
        return view('categorias.create');
    }

    // Salvar nova categoria no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required|string|max:255',
        ]);

        CategoriaServico::create($request->all());
        return redirect()->route('categorias.index');
    }

    // Atualizar dados da categoria
    public function update(Request $request, $id)
    {
        $request->validate([
            'descricao' => 'required|string|max:255',
        ]);

        $categoria = CategoriaServico::findOrFail($id);
        $categoria->update($request->all());
        return redirect()->route('categorias.index');
    }

    // Remover uma categoria
    public function destroy($id)
    {
        $categoria = CategoriaServico::findOrFail($id);
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}

