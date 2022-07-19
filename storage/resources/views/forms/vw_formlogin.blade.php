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
        <form>
        <label for="">Email</label>
        <input type="text" name="email">
        <label for="">Senha</label>
        <input type="text" name="password">
        <button type="submit">Entrar</button>
        </form>
    </div>

    @endsection
</body>
</html>