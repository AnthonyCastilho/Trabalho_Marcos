@extends('layout')

@section('content')
    <h2>Lista de Pizzas</h2>
    <a href="{{ route('pizza.create') }}" class="btn btn-primary mb-3">Nova Pizza</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pizza as $pizzas)
                <tr>
                    <td>{{ $pizzas->id }}</td>
                    <td>{{ $pizzas->nome }}</td>
                    <td>
                        <form action="{{ route('pizza.destroy', $pizzas->id) }}" method="POST" style="display:inline;">
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
