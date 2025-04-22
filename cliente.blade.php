@extends('layout')

@section('content')
<div class="container">
    <h2>Novo Cliente</h2>

    <form method="POST" action="{{ route('cliente.store') }}">
        @csrf

        <div class="form-group mb-3">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label>Telefone:</label>
            <input type="text" name="telefone" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Salvar Cliente</button>
        <a href="{{ route('cliente.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
