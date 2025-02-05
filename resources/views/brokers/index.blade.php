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

    <form action="/brokers" method="POST"></form>
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
</body>
</html>
