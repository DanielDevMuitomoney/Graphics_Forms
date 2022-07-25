<nav>
    <ul>
        <a href="{{route('products.show')}}"><li class="nav-item">Home</li></a>
        <li class="nav-item">Inventário</li>
        <li class="nav-item">Minhas Requisições</li>
        @if(Auth::user()->fk_typeuser==2)
        <a href="{{route('adm.show')}}"><li class="nav-item">Administração</li></a>
        @endif
        @if(Auth::check())
        <a href="{{route('action.logout')}}"><li class="nav-item">Logout</li></a>
        @endif
    </ul>
</nav>

@yield('content')