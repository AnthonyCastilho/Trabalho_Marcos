<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica - Sistema de Agendamentos</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/darkly/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Clínica</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Agendamentos -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('agendamento.index') }}">Agendamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('agendamento.create') }}">Novo Agendamento</a>
                    </li>

                    <!-- Pacientes -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('paciente.index') }}">Pacientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('paciente.create') }}">Novo Paciente</a>
                    </li>

                    <!-- Serviços -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('servico.index') }}">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('servico.create') }}">Novo Serviço</a>
                    </li>

                    <!-- Categorias de Serviço (se precisar) -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('categoria.index') }}">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categoria.create') }}">Nova Categoria</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo da página -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
