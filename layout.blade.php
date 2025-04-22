<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria - Sistema de Pedidos</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/darkly/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Pizzaria</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Pedidos -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('pedidos.index') }}">Pedidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pedidos.create') }}">Novo Pedido</a>
                    </li>

                    <!-- Clientes -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('cliente.index') }}">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cliente.create') }}">Novo Cliente</a>
                    </li>

                    <!-- Pizzas -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('pizza.index') }}">Pizzas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pizza.create') }}">Nova Pizza</a>
                    </li>

                    <!-- Tamanhos -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('tamanho.index') }}">Tamanhos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tamanho.create') }}">Novo Tamanho</a>
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
