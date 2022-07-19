<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/layout/default.css">
    <title>Document</title>
</head>
<body>
    @extends('layouts.lay_default')

    @section('content')
    <div class="container">
    <form name="register.user.form">
        <label for="">Nome</label>
        <input type="text" name="name">
        <label for="">Email</label>
        <input type="email" name="email">
        <label for="">Senha</label>
        <input type="password" name="password">
        <label for="">Confirme a sua senha</label>
        <input type="password" name="password2">
        <input type="submit" value="Cadastrar">
    </form>
    </div>
    @endsection
</body>
</html>