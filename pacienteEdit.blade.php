@extends('layout')

@section('content')
<div class="container">
    <h2>Editar Paciente</h2>

    <form action="{{ route('paciente.update', $paciente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $paciente->nome }}" required>
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" name="telefone" id="telefone" class="form-control" value="{{ $paciente->telefone }}">
        </div>

        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço:</label>
            <input type="text" name="endereco" id="endereco" class="form-control" value="{{ $paciente->endereco }}">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('paciente.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
