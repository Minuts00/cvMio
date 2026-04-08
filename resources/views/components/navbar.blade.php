<head>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary justify-content-center">
  <div class="container-fluid ">
    <a class="navbar-brand" href="home">LOGO DEVVINUTS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="anagdata">Dati anagrafici</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Esperienze e competenze
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Istruzione</a></li>
            <li><a class="dropdown-item" href="#">Esperienza lavorativa</a></li>
            <li><a class="dropdown-item" href="#">Cos'altro so fare? Ecco!</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>