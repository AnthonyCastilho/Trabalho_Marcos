@extends('layout')

@section('content')
<div class="container">
    <h2>Novo Pedido</h2>

    <form method="POST" action="{{ route('pedidos.store') }}">
        @csrf

        <div class="form-group">
            <label for="cliente_id">Cliente</label>
            <select name="cliente_id" id="cliente_id" class="form-control" required>
                <option value="">Selecione um cliente</option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="nome">Confirma Nome do Cliente</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>

        <h4>Pizzas</h4>
        <div id="pizzas-container">
            <div class="pizza-item row mb-3">
                <div class="col-md-4">
                    <label>Pizza:</label>
                    <select name="pizzas[]" class="form-control">
                        @foreach ($pizzas as $pizza)
                            <option value="{{ $pizza->id }}">{{ $pizza->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <label>Tamanho:</label>
                    <select name="tamanhos[]" class="form-control">
                        @foreach ($tamanhos as $tamanho)
                            <option value="{{ $tamanho->id }}">{{ $tamanho->descricao }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2">
                    <label>Qtd:</label>
                    <input type="number" name="quantidades[]" class="form-control" min="1" value="1">
                </div>

                <div class="col-md-2 d-flex align-items-end">
                    <button type="button" class="btn btn-danger remove-pizza">Remover</button>
                </div>
            </div>
        </div>

        <button type="button" id="add-pizza" class="btn btn-secondary mb-3">Adicionar Pizza</button>

        <button type="submit" class="btn btn-primary">Salvar Pedido</button>
    </form>
</div>

<script>
    document.getElementById('add-pizza').addEventListener('click', function () {
        let container = document.querySelector('#pizzas-container');
        let firstItem = container.querySelector('.pizza-item');
        let clone = firstItem.cloneNode(true);

        // Resetando valores do clone
        clone.querySelectorAll('select, input').forEach(el => {
            if (el.tagName === 'SELECT') el.selectedIndex = 0;
            if (el.tagName === 'INPUT') el.value = 1;
        });

        container.appendChild(clone);
    });

    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-pizza')) {
            let items = document.querySelectorAll('.pizza-item');
            if (items.length > 1) {
                e.target.closest('.pizza-item').remove();
            }
        }
    });
</script>
@endsection
