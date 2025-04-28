<?php

namespace App\Http\Controllers;

use App\Models\CategoriaServico;
use Illuminate\Http\Request;

class CategoriaServicoController extends Controller
{
    protected function findCategoriaServico($id)
    {
        return CategoriaServico::findOrFail($id);
    }

    public function index()
    {
        $categorias = CategoriaServico::all();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required|string|max:255',
        ]);

        CategoriaServico::create($request->only('descricao'));
        return redirect()->route('categorias.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'descricao' => 'required|string|max:255',
        ]);

        $categoria = $this->findCategoriaServico($id);
        $categoria->update($request->only('descricao'));
        return redirect()->route('categorias.index');
    }

    public function destroy($id)
    {
        $categoria = $this->findCategoriaServico($id);
        
        if ($categoria->servicos()->count() > 0) {
            return redirect()->route('categorias.index')->with('error', 'Não é possível excluir a categoria, pois ela está associada a serviços.');
        }

        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}
