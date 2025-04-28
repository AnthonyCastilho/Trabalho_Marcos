@extends('layout')

@section('content')
<div class="container">
    <h2>Lista de Pacientes</h2>

    <a href="{{ route('paciente.create') }}" class="btn btn-success mb-3">Novo Paciente</a>

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
            @foreach ($paciente_tb as $paciente)
                <tr>
                    <td>{{ $paciente->id }}</td>
                    <td>{{ $paciente->nome }}</td>
                    <td>{{ $paciente->telefone }}</td>
                    <td>
                        <a href="{{ route('paciente.edit', $paciente->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('paciente.destroy', $paciente->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Tem certeza que deseja excluir este paciente?');">
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

