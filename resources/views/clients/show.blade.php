<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Clientes</title>
</head>
<body>
    <h1>Detalhes do Cliente {{ $client->name }}</h1>
    
    <a href="{{ route('clients.index') }}">Voltar</a>

    <p>Name - {{ $client->name }}</p>
    <p>LastName - {{ $client->lastname }}</p>
    <p>CPF - {{ $client->cpf }}</p>
    <p>CNPJ - {{ $client->cnpj }}</p>
    <p>E-mail - {{ $client->email }}</p>

    <a href="{{ route('clients.edit', $client) }}">Editar</a>
</body>
</html>