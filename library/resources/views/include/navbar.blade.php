<nav class="navbar navbar-expand-lg bg-light mb-2">
    <div class="container-fluid">
      <a class="navbar-brand font-bold" href="{{ route('h.index') }}">Biblioteka</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link"  href="{{ route('h.index') }}">Strona główna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Dostępne książki</a>
          </li>
        </ul>
        <div class="d-flex">
            @guest
                <a class="btn btn-primary me-2" href="{{ route('login') }}">Zaloguj sie</a>
                <a class="btn btn-outline-primary" href="{{ route('register') }}">Zarejestruj się</a>
            @endguest

            @auth
                <a href="#" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">Wyloguj się!</a>
            @endauth

        </div>
      </div>
    </div>
  </nav>
