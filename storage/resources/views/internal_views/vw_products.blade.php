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
        <div class="product">
            <h3 class="title-product">Title Item</h3>
            <img class="imgproduct" src="https://guiademarketing.com.br/wp-content/uploads/2017/04/produtos.jpg" alt="">
            <p class="desc-product">Desc itemddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
            <div class="div-a"><a class="link-product" href="#"><button class="button-product">Acessar</button></a></div>
        </div>
    </section>
    @endsection
</body>
</html>