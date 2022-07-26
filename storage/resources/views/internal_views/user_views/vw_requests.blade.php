<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="/css/layout/default.css">
    <link rel="stylesheet" href="/css/requests.css">
    <title>Document</title>
</head>
<body>
    @extends('layouts.lay_user')

    @section('content')
    <h1>Seus Pedidos</h1>

    <div class="container">
        <section>
            
<table class="table">
  <thead>
    <tr>
      <th scope="col">Produto</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Situação</th>
      <th scope='col'>Data do Pedido</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($requests as $r)
    <tr>

      <td>{{$r->nm_product}}</td>
      <td>{{$r->qtd_request_product}}</td>
      <td>{{$r->nm_status}}</td>
      <td>{{ date( 'd/m/Y' , strtotime($r->dt_create))}}</td>
      <td><button class="infobtn">Informações</button></td>

    </tr>
    @endforeach

  </tbody>

</table>
        </section>

    </div>

    @endsection
</body>
</html>