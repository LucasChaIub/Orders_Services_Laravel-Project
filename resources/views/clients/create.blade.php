<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <h1>Criar Cliente</h1>
    
    <a href="{{ route('clients.index') }}">Voltar</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clients.store') }}" method="POST">
        <div>
            <label>Nome: </label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Sobrenome: </label>
            <input type="text" name="lastname">
        </div>
        <div>
            <label>E-mail: </label>
            <input type="text" name="email">
        </div>

        <button type="submit">Cadastrar Cliente</button>
    </form>
</body>
</html>