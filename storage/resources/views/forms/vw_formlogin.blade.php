<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/layout/form.css">
    <link rel="stylesheet" href="/css/layout/default.css">
    <title>Document</title>
</head>
<body>
    @extends('layouts.lay_default')
    @section('content')
    <div class="container">
        <form name="loginform">
            @csrf
        <label for="">Email</label>
        <input type="text" name="email">
        <label for="">Senha</label>
        <input type="text" name="password">
        <button type="submit">Entrar</button>
        </form>
    </div>
<script src="/js/jquery.js"></script>
<script>
$(function(){
    //pega html obj
    $('form[name="loginform"]').submit(function(){
        //previne que a página de refresh;
        event.preventDefault();
        //ajax do jquery
        $.ajax(
            {
                url:"{{route('action.login')}}",
                type:"post",
                data: $(this).serialize(),
                dataType:'json',
                success: function(data) 
                {
                    if(data.login===true)
                    {
                        alert('Login realizado com sucesso!');
                        window.location.href="{{route('products.show')}}";
                    }
                    else
                    {
                        alert('Login ou senha incorretos!');
                    }
                }
            });
    });
});
</script>
    @endsection
</body>
</html>