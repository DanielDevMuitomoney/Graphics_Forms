<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/layout/default.css">
    <link rel="stylesheet" href="/css/adm/AdmArea.css">
    <title>Document</title>
</head>
<body>
    @extends('layouts.lay_user')
    @section('content')
    <h1>Área de Administração</h1>

    <div id="container">
        <section>
            <div class="adm-tool">
                <h3>Gerenciar usuários</h3>
                <img src="https://www.seekpng.com/png/detail/548-5486321_royalty-free-user-profile-icons-free-people-e.png" alt="users tool">
                <p>Ferramenta de administração, capaz de gerenciar os usuários</p>
                <a><button>ACESSAR</button></a>
            </div>

            <div class="adm-tool">
                <h3>Gerenciar pedidos</h3>
                <img src="https://dendriteitsol.com/images/ecom-solutions.png" alt="users tool">
                <p>Ferramenta de administração, capaz de gerenciar os usuários</p>
                <a class="link-btn"><button>ACESSAR</button></a>
            </div>

            <div class="adm-tool">
                <h3>Gerenciar pedidos</h3>
                <img src="https://dendriteitsol.com/images/ecom-solutions.png" alt="users tool">
                <p>Ferramenta de administração, capaz de gerenciar os usuários</p>
                <a class="link-btn"><button>ACESSAR</button></a>
            </div>
        </section>
    </div>
    @endsection
</body>
</html>