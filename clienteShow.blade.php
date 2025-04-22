@extends('layout')

@section('content')
<div class="container">
    <h2>Editar Cliente</h2>

    <form action="{{ route('cliente.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $cliente->nome }}" required>
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" name="telefone" id="telefone" class="form-control" value="{{ $cliente->telefone }}">
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Endereço:</label>
            <input type="text" name="telefone" id="endereco" class="form-control" value="{{ $cliente->endereco}}">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('cliente.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
