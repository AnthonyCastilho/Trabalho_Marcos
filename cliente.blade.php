@extends('layout')

@section('content')
<div class="container">
    <h2>Novo Paciente</h2>

    <form method="POST" action="{{ route('paciente.store') }}">
        @csrf

        <div class="form-group mb-3">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label>Telefone:</label>
            <input type="text" name="telefone" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Salvar Paciente</button>
        <a href="{{ route('Paciente.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
