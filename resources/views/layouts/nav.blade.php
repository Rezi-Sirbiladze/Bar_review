
<nav class="navbar navbar-expand-md bg-light navegacion_pagina">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('entrada') }}">Entrada</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('establecimientos_ranking') }}">Ranking establecimientos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('establecimientos') }}">Todos los establecimientos</a>
        </li>
      </ul>

    <div class="dropdown">
        <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          @if (Route::has('login'))
          @auth
          {{Auth::user()->name}}
          @else
          Hola
          @endauth
          @endif
        </a>

        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
          @if (Route::has('login'))
          @auth
              <li><a href="{{ url('/dashboard') }}" class="dropdown-item">Dashboard</a></li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <li><button onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-item">Logout</button></li>
              </form>
              @else
              <li><a href="{{ route('login') }}" class="dropdown-item">Log in</a></li>
              @if (Route::has('register'))
              <li><a href="{{ route('register') }}" class="dropdown-item">Register</a></li>
              @endif
          @endauth
          @endif
        </ul>

      </div>

    </div>
  </div>
</nav>   



