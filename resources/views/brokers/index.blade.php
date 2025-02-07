<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Início</title>
</head>
<body>
    <h1>Bem vindo ao Cadastro de Corretores</h1>
    <h2>Cadastrar Corretor</h2>

    @if (isset($broker))
    <form action="{{ route('brokers.update'), $broker->id }}" method="POST">
    @method('PUT')
    @else
    <form action="{{ route('brokers.store') }}" method="POST">
    @endif
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="creci">Creci</label>
        <input type="text" name="creci" id="creci">
        <br>
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf">
        <br>
        <button type="submit">Enviar</button>
        <a href="">Enviar</a>
    </form>

    <h2>Corretores Cadastrados</h2>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Creci</th>
                <th>CPF</th>
                <th>opções</th>
            </tr>
        </thead>

        @foreach($brokers as $broker)
            <tbody>
                <tr>
                    <td>{{ $broker->name }}</td>
                    <td>{{ $broker->creci }}</td>
                    <td>{{ $broker->cpf }}</td>
                    <td>editar</td>
                </tr>
            </tbody>
        @endforeach
    </table>
</body>
</html>
