@extends('layout')

@section('content')
    <h2>Nova Pizza</h2>
    <form action="{{ route('pizza.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome da Pizza</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nome">Preço da Pizza</label>
            <input type="text" name="preco_base" id="preco_base" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Salvar</button>
    </form>
@endsection
