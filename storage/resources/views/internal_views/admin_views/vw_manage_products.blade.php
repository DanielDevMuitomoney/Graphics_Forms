<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/layout/default.css">
    <link rel="stylesheet" href="/css/adm/manage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.lay_user')
    @section('content')
    <div>
        <section>//listar produtos
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Produto</th>
      <th scope="col">Quantidade Disponivel</th>
      <th scope="col">Itens emprestados</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $p)
    <tr>

      <td>{{$p->nm_product}}</td>
      <td>{{$p->qtd_product}}</td>
      <td>9999999</td>

      <td colspan="2"><a href="/gerenciar-pedido/{{$p->id_product}}"><button class="infobtn">Ver Pedidos</button></a><button class="danger-btn">Bloquear Produto</button></td>

    </tr>
    @endforeach

  </tbody>

</table>
        </section>
    </div>
    

    @endsection
</body>
</html>