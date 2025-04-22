@extends('layout')

@section('content')
<div class="container">
    <h1>Pedido</h1>
    <form method="POST" action="{{ route('pedidos.store') }}">
        @csrf
        <div class="form-group">
        <label for="nome">Nome do Cliente</label>
        <input type="text" name="nome" id="nome" class="form-control" required>
    </div>




        <button type="submit" class="btn btn-success mt-3">Salvar</button>
    </form>
</div>
@endsection
