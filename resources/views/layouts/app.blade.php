<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Aplicação</title>
</head>
<body>
    <nav>
        <a href="{{ route('unidades.index') }}">Listar Unidades</a>
        <a href="{{ route('unidades.create') }}">Cadastrar Unidade</a>
    </nav>

    <div>
        @yield('content')
    </div>

    <footer>
        <!-- Rodapé da sua aplicação -->
    </footer>
</body>
</html>
