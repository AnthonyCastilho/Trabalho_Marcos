@extends('layout')

@section('content')
<div class="container">
    <h2>Lista de Clientes</h2>

    <a href="{{ route('cliente.create') }}" class="btn btn-success mb-3">Novo Cliente</a>


        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cliente_tb as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->telefone }}</td>
                        <td>
                            <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Tem certeza que deseja excluir este cliente?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection
