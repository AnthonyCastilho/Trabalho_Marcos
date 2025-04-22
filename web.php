<?php

use App\Http\Controllers\ControllerCliente;
use App\Http\Controllers\ControllerPedido;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\TamanhoController;


Route::get('/', function () {
    return redirect()->route('pedidos.index');
});



//Pedidos
Route::get('/pedidos', [ControllerPedido::class, 'index'])->name('pedidos.index');
Route::get('/pedidos/create', [ControllerPedido::class, 'create'])->name('pedidos.create');
Route::post('/pedidos', [ControllerPedido::class, 'store'])->name('pedidos.store');
Route::get('/pedidos/{pedido}/edit', [ControllerPedido::class, 'edit'])->name('pedidos.edit');
Route::put('/pedidos/{pedido}', [ControllerPedido::class, 'update'])->name('pedidos.update');
Route::get('/pedidos/{pedido}', [ControllerPedido::class, 'show'])->name('pedidos.show');
Route::delete('/pedidos/{pedido}', [ControllerPedido::class, 'destroy'])->name('pedidos.destroy');


//Cliente
Route::get('/cliente', [ControllerCliente::class, 'index'])->name('cliente.index');
Route::get('/cliente/create', [ControllerCliente::class, 'create'])->name('cliente.create');
Route::post('/cliente', [ControllerCliente::class, 'store'])->name('cliente.store');
Route::get('/cliente/{cliente}/edit', [ControllerCliente::class, 'edit'])->name('cliente.edit');
Route::put('/cliente/{cliente}', [ControllerCliente::class, 'update'])->name('cliente.update');
Route::get('/cliente/{cliente}', [ControllerCliente::class, 'show'])->name('cliente.show');
Route::delete('/cliente/{cliente}', [ControllerCliente::class, 'destroy'])->name('cliente.destroy');



// Rotas para Pizza

Route::get('/pizza', [PizzaController::class, 'index'])->name('pizza.index');
Route::get('/pizza/create', [PizzaController::class, 'create'])->name('pizza.create');
Route::post('/pizza', [PizzaController::class, 'store'])->name('pizza.store');
Route::delete('/pizza/{pizza}', [PizzaController::class, 'destroy'])->name('pizza.destroy');

// Rotas para Tamanho
Route::get('/tamanho', [TamanhoController::class, 'index'])->name('tamanho.index');
Route::get('/tamanho/create', [TamanhoController::class, 'create'])->name('tamanho.create');
Route::post('/tamanho', [TamanhoController::class, 'store'])->name('tamanho.store');
Route::delete('/tamanho/{tamanho}', [TamanhoController::class, 'destroy'])->name('tamanho.destroy');
