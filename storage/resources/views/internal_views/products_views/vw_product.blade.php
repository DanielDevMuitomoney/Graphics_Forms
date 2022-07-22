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
        <section id="product">
            
            <h2 id="title-product">{{$product->nm_product}}</h2>
            <img id="img-product" src="https://guiademarketing.com.br/wp-content/uploads/2017/04/produtos.jpg" alt="">
            <p id="desc-product">{{$product->ds_product}}</p>
            <a id="btn-link" href="#"><button id="btn-request">Requisitar</button></a>
            
        </section>

        <section id="infos">
        <img src="https://cdn-icons-png.flaticon.com/512/219/219986.png" alt="">
        <p id="desc-info">A pessoa que cadastrou este produto foi o(a) {NOME COMPLETO}</p>
        </section>
    </div>
    @endsection
</body>
</html>