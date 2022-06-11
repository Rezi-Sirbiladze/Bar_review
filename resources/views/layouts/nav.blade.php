<header class="header" id="header">
    <div class="container">
        <div class="header_in">
            <nav class="nav" id="nav">
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="menu" href="{{ route('entrada') }}">Entrada</a>
                <a class="menu" href="{{ route('establecimientos_ranking') }}">Ranking establecimientos</a>
                <a class="menu" href="{{ route('establecimientos') }}">Todos los establecimientos</a>
                <a class="menu" href="#">Buscador</a>
                <a class="menu">|</a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="menu">Dashboard</a>
                        <a href="" onclick="event.preventDefault(); this.closest('form').submit();" class="menu">Logout</a>
                    @else
                        <a href="{{ route('login') }}" class="menu">Log in</a>
                    @endauth
                @endif
            </form>
            </nav>

            <button class="nav_toggle" id="nav_toggle">
                <span class="toggle_item"></span>
            </button>
        </div>
    </div>
</header>
