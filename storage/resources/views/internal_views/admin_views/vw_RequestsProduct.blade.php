<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/layout/default.css">
    <link rel="stylesheet" href="/css/adm/RequestsProduct.css">
    <title>Document</title>
</head>
<body>
@extends('layouts.lay_user')

@section('content')
<h1>Pedidos do Produto {{$product->nm_product}}</h1>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Quantidade Solicitada</th>
      <th scope="col">Situação Atual</th>
      <th scope='col'>Data do Pedido</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($requests as $r)
    <tr>

      <td>{{$r->nm_user}}</td>
      <td>{{$r->qtd_request_product}}</td>
      <td>{{$r->nm_status}}</td>
      <td>{{date( 'd/m/Y' , strtotime($r->dt_create))}}</td>
      <td colspan="2"><a href=""><button class="infobtn">Aceitar</button></a><button class="danger-btn">Recusar</button></td>

    </tr>
    @endforeach

  </tbody>

</table>
@endsection
</body>
</html>