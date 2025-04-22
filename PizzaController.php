<?php

namespace App\Http\Controllers;

use App\Models\PizzaModel;
use App\Models\PizzaModelModel;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    // Exibir lista de PizzaModels
    public function index()
    {
        $pizza = PizzaModel::all();
        return view('pizzaIndex', compact('pizza'));
    }

    // Exibir formulário para criação de nova PizzaModelModel
    public function create()
    {
        return view('createPizza');
    }

    // Salvar nova PizzaModelModel no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        PizzaModel::create($request->all());
        return redirect()->route('pizza.index');
    }



    // Atualizar dados da PizzaModel
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $pizza = PizzaModel::findOrFail($id);
        $pizza->update($request->all());
        return redirect()->route('pizza.index');
    }

    // Remover uma PizzaModel
    public function destroy($id)
    {
        $pizza = PizzaModel::findOrFail($id);
        $pizza->delete();
        return redirect()->route('pizza.index');
    }
}
