<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/layout/default.css">
    <link rel="stylesheet" href="/css/product.css">
    <title>Document</title>
</head>
<body>
    @extends('layouts.lay_user')

    @section('content')
    <div id="container-product">

    <div class="alert success display-none" id="alert">
  Requisição feita com sucesso! Veja suas requisições em: LINK
</div>

        <section id="product">
            
            <h2 id="title-product">{{$product->nm_product}}</h2>
            <img id="img-product" src="/img/products/{{$product->path_img}}" alt="">
            <p id="desc-product">{{$product->ds_product}}</p>
            <form name="requestform">
                @csrf
                <label for="">Quantidade Desejada</label>
                <input type="hidden" name="product" value="{{$product->id_product}}">
                <input type="number" name="qtd" id="">
            <button type="submit" id="btn-request">
            Requisitar</button>
            </form>
            
        </section>

        <section id="infos">
        <img src="https://cdn-icons-png.flaticon.com/512/219/219986.png" alt="">
        <p id="desc-info">A pessoa que cadastrou este produto foi o(a) {NOME COMPLETO}</p>
        </section>
    </div>

    <script src="/js/jquery.js"></script>
<script>
    var alert= document.querySelector('#alert')
$(function(){
    //pega html obj
    $('form[name="requestform"]').submit(function(){
        //previne que a página de refresh;
        event.preventDefault();
        //ajax do jquery
        $.ajax(
            {
                url:"{{route('user.request')}}",
                type:"post",
                data: $(this).serialize(),
                dataType:'json',
                success: function(data) 
                {
                    if(data.success===true)
                    {
                        alert.classList.remove('display-none');

                    }
                    else
                    {
                        alert.classList.remove('display-none');
                        alert.classList.remove('success')
                        alert.classList.add('danger')
                        alert.innerHTML=data.error;                    }
                }
            });
    });
});
</script>
    @endsection
</body>
</html>