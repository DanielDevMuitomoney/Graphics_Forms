<nav>
    <ul>
        <a href="{{route('products.show')}}"><li class="nav-item">Home</li></a>
        <li class="nav-item">Inventário</li>
        <li class="nav-item">Minhas Requisições</li>
        @if(Auth::user()->fk_typeuser==2)
        <li class="nav-item">Administração</li>
        @endif
    </ul>
</nav>

@yield('content')