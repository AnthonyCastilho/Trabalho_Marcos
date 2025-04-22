@extends('layout')

@section('content')
    <h2>Lista de Tamanhos</h2>
    <a href="{{ route('tamanho.create') }}" class="btn btn-primary mb-3">Novo Tamanho</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tamanhos as $tamanho)
                <tr>
                    <td>{{ $tamanho->id }}</td>
                    <td>{{ $tamanho->descricao }}</td>
                    <td>
                        <form action="{{ route('tamanho.destroy', $tamanho->id) }}" method="POST" style="display:inline;">
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
