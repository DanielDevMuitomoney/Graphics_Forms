<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/layout/default.css">
    <link rel="stylesheet" href="/css/adm/RegisterProduct.css">
    <title>Document</title>
</head>
<body>
    @extends('layouts.lay_user')
    @section('content')
    <h1>Cadastrar Produtos</h1>

    <form name="register_product_form"enctype="multipart/form-data" method="post" action="{{route('adm.register')}}" >
        @csrf
        <label for="">Digite o nome do produto</label>
        <input name="name" type="text" id="name">
        <label for="">Digite a descrição</label>
        <input name="desc" type="text" id="desc">
        <label for="">Digite a quantidade do produto</label>
        <input name="qtd" type="number" id="qtd">
        <label for="">Categoria</label> 
        <select id="select" name="select">
            @foreach($categories as $c)
            <option value="{{$c->id_category}}">{{$c->nm_category}}</option>
            @endforeach
        </select>
        <label for="">Foto</label>
        <input id="image" type="file" name="image" >
        <input type="submit" value="Cadastrar">
        
    </form>



    @endsection
</body>
</html>