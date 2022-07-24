<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/layout/default.css">
    <link rel="stylesheet" href="/css/products.css">
    <title>Document</title>
</head>
<body>
    @extends('layouts.lay_user')
    @section('content')

    <h1 id="title">Bem-vindo ao estoque</h1>
    <section class="products">
        @foreach($products as $p)
        <div class="product">
            <h3 class="title-product">{{$p->nm_product}}</h3>
            <img class="imgproduct" src="/img/products/{{$p->path_img}}" alt="">
            <p class="desc-product">{{$p->ds_product}}</p>
            <div class="div-a"><a class="link-product" href="produto/{{$p->id_product}}"><button class="button-product">Acessar</button></a></div>
        </div>
        @endforeach
    </section>
    @endsection
</body>
</html>