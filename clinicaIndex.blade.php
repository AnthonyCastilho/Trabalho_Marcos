@extends('layout')

@section('content')
<div class="container">
    <h2>Lista de Pacientes</h2>

    <a href="{{ route('paciente.create') }}" class="btn btn-primary mb-3">Novo Paciente</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paciente_tb as $paciente)
                <tr>
                    <td>{{ $paciente->id }}</td>
                    <td>{{ $paciente->nome }}</td>
                    <td>{{ $paciente->telefone }}</td>
                    <td>{{ $paciente->endereco }}</td>
                    <td>
                        <form action="{{ route('paciente.destroy', $paciente->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>

                        <a href="{{ route('paciente.edit', $paciente->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
