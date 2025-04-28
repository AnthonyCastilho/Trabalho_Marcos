@extends('layout')

@section('content')
<div class="container">
    <h1>Criar Novo Pedido de Consulta</h1>
    <form method="POST" action="{{ route('pedidos.store') }}">
        @csrf

        <!-- Paciente -->
        <div class="form-group">
            <label for="paciente_id">Paciente</label>
            <select name="paciente_id" id="paciente_id" class="form-control" required>
                <option value="">Selecione um Paciente</option>
                @foreach($pacientes as $paciente)
                    <option value="{{ $paciente->id }}">{{ $paciente->nome }}</option>
                @endforeach
            </select>
        </div>

        <!-- Consultas -->
        <h4>Consultas</h4>
        <div id="consultas-container">
            <div class="consulta-item row mb-3">
                <div class="col-md-4">
                    <label for="consulta_id">Consulta</label>
                    <select name="consulta_id[]" class="form-control" required>
                        @foreach ($consultas as $consulta)
                            <option value="{{ $consulta->id }}">{{ $consulta->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="especialidade_id">Especialidade</label>
                    <select name="especialidade_id[]" class="form-control" required>
                        @foreach ($especialidades as $especialidade)
                            <option value="{{ $especialidade->id }}">{{ $especialidade->descricao }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2">
                    <label for="quantidade">Quantidade</label>
                    <input type="number" name="quantidade[]" class="form-control" min="1" value="1" required>
                </div>

                <div class="col-md-2 d-flex align-items-end">
                    <button type="button" class="btn btn-danger remove-consulta">Remover</button>
                </div>
            </div>
        </div>

        <button type="button" id="add-consulta" class="btn btn-secondary mb-3">Adicionar Consulta</button>

        <button type="submit" class="btn btn-primary">Salvar Pedido</button>
    </form>
</div>

<script>
    document.getElementById('add-consulta').addEventListener('click', function () {
        let container = document.querySelector('#consultas-container');
        let firstItem = container.querySelector('.consulta-item');
        let clone = firstItem.cloneNode(true);

        clone.querySelectorAll('select, input').forEach(el => {
            if (el.tagName === 'SELECT') el.selectedIndex = 0;
            if (el.tagName === 'INPUT') el.value = 1;
        });

        container.appendChild(clone);
    });

    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-consulta')) {
            let items = document.querySelectorAll('.consulta-item');
            if (items.length > 1) {
                e.target.closest('.consulta-item').remove();
            }
        }
    });
</script>
@endsection

