<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Clientes</title>
</head>
<body>
    <h3>Clientes</h3>
    
    <a href="{{ route('clients.create') }}">Criar Cliente</a>

    <ul>
        @foreach ($clients as $client)
            <li>{{ $client }}</li>
        @endforeach
    </ul>
</body>
</html>