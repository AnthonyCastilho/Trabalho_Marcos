@extends('layout')

@section('content')
    <h2>Nova Descrição de Tamanho</h2>
    <form action="{{ route('tamanho.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="descricao">Descrição do Tamanho</label>
            <input type="text" name="descricao" id="descricao" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descricao">Preço Extra</label>
            <input type="text" name="preco_extra" id="preco_extra" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Salvar</button>
    </form>
@endsection
