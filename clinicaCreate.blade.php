@extends('layout')

@section('content')
    <h2>Nova Categoria de Serviço</h2>
    <form action="{{ route('categoria-servico.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="descricao">Descrição da Categoria</label>
            <input type="text" name="descricao" id="descricao" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="valor_extra">Valor Extra</label>
            <input type="number" step="0.01" name="valor_extra" id="valor_extra" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Salvar</button>
    </form>
@endsection

