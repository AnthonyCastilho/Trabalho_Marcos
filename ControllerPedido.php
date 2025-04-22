<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\clienteModel;
use App\Models\pedidoModel;
use App\Models\Pizza;
use App\Models\Tamanho;
use Illuminate\Http\Request;
use App\Models\PedidoPizza;
use App\Models\pizzaModel;
use App\Models\tamanhoModel;

class ControllerPedido extends Controller
{
    public readonly pizzaModel $pizza;
    
    public function __construct(){
        $this->pizza = new pizzaModel();

    }

    

    public function index()
    {
        $clientes = ClienteModel::all();
        $pizzas = PizzaModel::all();
        $tamanhos = TamanhoModel::all();
    
        return view('pedidos', [
            'clientes' => $clientes,
            'nome' => $clientes,
            'pizzas' => $pizzas,
            'tamanhos' => $tamanhos
        ]);
    }
    public function create()
    {
        $clientes = ClienteModel::all();
        $pizzas = PizzaModel::all(); // ou ProdutoModel, dependendo de como você organizou

        return view('pizzaCreate', [
            'clientes' => $clientes,
            'pizzas_tb' => $pizzas
        ]);
    }

 
    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'pizza_id' => 'required|exists:pizzas,id',
            'tamanho_id' => 'required|exists:tamanhos,id',
            'quantidade' => 'required|integer|min:1'
        ]);
    
        pedidoModel::create([
            'cliente_id' => $request->cliente_id,
            'pizza_id' => $request->pizza_id,
            'tamanho_id' => $request->tamanho_id,
            'quantidade' => $request->quantidade,
            'data_pedido' => now(),
            'status' => 'Pendente', // ou outro valor padrão
            'valor_total' => 0 // Pode calcular depois
        ]);
    
        return redirect()->route('pedidos.index')->with('success', 'Pedido criado com sucesso!');
    }
    
    


    public function edit($id)
    {
        $pedido = pedidoModel::findOrFail($id);
        return view('pedidos.edit', compact('pedido'));
    }
    
    public function update(Request $request, $id)
    {
        $pedido = pedidoModel::findOrFail($id);
        $pedido->update([
            'status' => $request->status,
        ]);
    
        return redirect()->route('pedidos.index')->with('success', 'Pedido atualizado com sucesso!');
    }
    
    public function destroy($id)
    {
        $pedido = pedidoModel::findOrFail($id);
        $pedido->delete();
    
        return redirect()->route('pedidos.index')->with('success', 'Pedido excluído com sucesso!');
    }}
