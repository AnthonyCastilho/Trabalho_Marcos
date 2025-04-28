@extends('layout')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Agendamentos</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Data de Agendamento</th>
                <th>Status</th>
                <th>Serviço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($agendamentos as $agendamento)
                <tr>
                    <td>{{ $agendamento->id }}</td>
                    <td>{{ $agendamento->paciente->nome ?? 'N/A' }}</td>
                    <td>{{ $agendamento->data_agendamento->format('d/m/Y') }}</td>
                    <td>{{ $agendamento->status }}</td>
                    <td>{{ $agendamento->servico->descricao ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('agendamentos.edit', $agendamento->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('agendamentos.destroy', $agendamento->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
