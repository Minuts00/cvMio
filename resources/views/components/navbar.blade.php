<head>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<nav class="site-navbar navbar navbar-expand-lg" aria-label="Navigazione principale">
  <div class="container-fluid site-navbar__inner">
    <a class="site-navbar__brand" href="{{ url('/home') }}"><img src="{{ asset('images/logo.png')}}" class="logo"></a>

    <button
      class="navbar-toggler site-navbar__toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#primaryNavbar"
      aria-controls="primaryNavbar"
      aria-expanded="false"
      aria-label="Apri/chiudi menu"
    >
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="primaryNavbar">
      <ul class="navbar-nav ms-auto site-navbar__links">
        <li class="nav-item">
           <a class="nav-link site-navbar__link {{ request()->is('jobs') ? 'is-active' : '' }}" href="{{ url('/jobs') }}">
            Esperienza lavorativa
          </a>
          </li>
        <li class="nav-item">
          <a class="nav-link site-navbar__link {{ request()->is('miscellaneous') ? 'is-active' : '' }}" href="{{ url('/miscellaneous') }}">
            Parlo di me
          </a>
        </li>
        </ul>
    </div>
  </div>
</nav>
