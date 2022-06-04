<header class="header" id="header">
    <div class="container">
        <div class="header_in">
            <nav class="nav" id="nav">
                <a class="menu" href="{{ route('entrada') }}">Entrada</a>
                <a class="menu" href="{{ route('establecimientos_ranking') }}">Ranking establecimientos</a>
                <a class="menu" href="{{ route('establecimientos') }}">Todos los establecimientos</a>
                <a class="menu" href="#">Buscador</a>
                <a class="menu" href="{{ route('login') }}">Log in</a>
            </nav>

            <button class="nav_toggle" id="nav_toggle">
                <span class="toggle_item"></span>
            </button>
        </div>
    </div>
</header>
