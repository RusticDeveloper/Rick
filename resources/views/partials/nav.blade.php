<nav>
    <ul>
        @if(request()->routeIs('home.show'))
            <li class="{{ setActive("home.show") }}"><a href="{{route('home.show')}}">Rick And Morty Characters</a></li>
        @else
            <li class="{{ setActive("home.index") }}"><a href="{{route('home.index')}}">Rick And Morty Characters</a></li>
        @endif
            <li class="{{ setActive("portfolio") }}"><a href="{{route('portfolio')}}">PortaFolio</a></li>
    </ul>
</nav>
