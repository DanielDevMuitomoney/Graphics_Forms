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
      <div id="tools">
        <a class="link-tool"></a><button id="pdf-btn">Gerar PDF</button><a href="" class="link-tool"><button id="excel-btn">Exportar para Excel</button></a>
      </div>
      <div class="alert"></div>
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
      <td colspan="2"><button class="infobtn" onclick="get_info('{{$r->id_request}}')">Informações</button><button class="danger-btn" onclick="cancel('{{$r->id_request}}')">Cancelar</button></td>

    </tr>
    @endforeach

  </tbody>

</table>
        </section>

    </div>


    <script src="/js/jquery.js"></script>
    <script>
      var _token = "{{csrf_token()}}";
      var alert= document.querySelector('.alert');
function cancel(id){
  
  

        //ajax do jquery
        $.ajax(
            {
                url:"{{route('action.cancel')}}",
                type:"post",
                data:{_token,id},
                dataType:'json',
                success: function(data) 
                {
                  if(data.success===true){
                  console.log('foi man')
                  }
                }
            });
    


}

function get_info(id)
{
  $.ajax(
            {
                url:"{{route('action.info_request')}}",
                type:"post",
                data:{_token,id},
                dataType:'json',
                success: function(data) 
                {
                  if(data.success===true){
                    alert.classList.add('info');
                    $('.alert').empty();
                  alert.innerHTML='<img src=/img/products/'+data.path_img+'><h3>Quantidade disponivel:'+data.qtd_prduct+'</h3>';
                  
                  
                  
                  ;

                  }
                }
            });
    
}
    </script>

    @endsection
</body>
</html>