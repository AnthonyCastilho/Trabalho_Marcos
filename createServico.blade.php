@extends('layout')

@section('content')
    <h2>Novo Serviço</h2>
    <form action="{{ route('servico.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome do Serviço</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="preco_base">Preço Base</label>
            <input type="text" name="preco_base" id="preco_base" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Salvar</button>
    </form>
@endsection

