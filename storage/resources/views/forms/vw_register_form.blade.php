<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/layout/default.css">
    <link rel="stylesheet" href="/css/layout/form.css">
    <title>Document</title>
</head>
<body>
    @extends('layouts.lay_default')

    @section('content')
    <div class="container">
    <form name="registerform">
        @csrf
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

<script src="/js/jquery.js"></script>
    <script>
$(function(){
    //pega html obj
    $('form[name="registerform"]').submit(function(){
        //previne que a página de refresh;
        event.preventDefault();
        //ajax do jquery
        $.ajax(
            {
                url:"{{route('action.register')}}",
                type:"post",
                data: $(this).serialize(),
                dataType:'json',
                success: function(data) 
                {
                    if(data.register===true)
                    {
                        alert('Cadastro realizado com sucesso!');
                        window.location.href="/login";
                    }
                }
            });
    });
});
</script>
    @endsection
</body>
</html>