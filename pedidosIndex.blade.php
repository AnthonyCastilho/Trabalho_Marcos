@extends('layout')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Pedidos</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Data</th>
                <th>Status</th>
                <th>Valor Total</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidos_tb as $pedido)
                <tr>
                    <td>{{ $pedido->id }}</td>
                    <td>{{ $pedido->cliente->nome ?? 'N/A' }}</td>
                    <td>{{ $pedido->data_pedido }}</td>
                    <td>{{ $pedido->status }}</td>
                    <td>R$ {{ number_format($pedido->valor_total, 2, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
