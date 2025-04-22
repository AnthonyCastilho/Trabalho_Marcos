@extends('layout')

@section('content')
<div class="container">
    <h2>Novo Cliente</h2>

    <form action="{{ route('cliente.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Endereço:</label>
            <input type="text" name="telefone" id="endereco" class="form-control">
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" name="telefone" id="telefone" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('cliente.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
