@extends('layout')

@section('content')
    <h2>Lista de Categorias de Serviço</h2>
    <a href="{{ route('categoria-servico.create') }}" class="btn btn-primary mb-3">Nova Categoria</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Valor Extra</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->descricao }}</td>
                    <td>{{ number_format($categoria->valor_extra, 2, ',', '.') }}</td>
                    <td>
                        <form action="{{ route('categoria-servico.destroy', $categoria->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
