<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\clienteModel;
use Illuminate\Http\Request;

class ControllerCliente extends Controller
{
    public readonly clienteModel $cliente;
    
    public function __construct(){
        $this->cliente = new clienteModel();

    }
    public function index(){
        $cliente_=$this->cliente->all();
        return view('clienteIndex',['cliente_tb'=>$cliente_]);
    
        // return view('animais');
        }

    public function create()
    {
        return view('clienteCreate');
    }

    public function store(Request $request)
    {
        clienteModel::create($request->all());
        return redirect()->route('cliente.index')->with('success', 'Cliente criado com sucesso.');
    }

    public function edit($id)
    {
        $cliente = clienteModel::findOrFail($id);
        return view('clienteEdit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = clienteModel::findOrFail($id);
        $cliente->update($request->all());
        return redirect()->route('cliente.index')->with('success', 'Cliente atualizado.');
    }

    public function destroy($id)
    {
        $cliente = clienteModel::findOrFail($id);
        $cliente->delete();
        return redirect()->route('cliente.index')->with('success', 'Cliente removido.');
    }
}
