
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Book&Delivery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
        @auth
        {{  auth()->user()->email }} 
        @endauth
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body nav-panel">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
         
          <li class="nav-item">
            <a class="nav-link  active"   href="{{ route('admin-index') }} "> <i class="bi bi-houses"></i>  Home</a>
            <hr class="dropdown-divider">
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('reserva-index')}}"><i class="bi bi-calendar-check"></i>  Reservas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  active"   href="{{ route('index')}} " target="_blank"><i class="bi bi-eye"></i>  Book&Delivery</a>
          </li>
          <li class="nav-item">
          <a class="nav-link  active"   href="{{ route('registrarse') }}" > <i class="bi bi-person-add"></i>  Añadir Usuario Administrador</a>
          <li class="nav-item">
            <a class="nav-link  active"   href=" " > <i class="bi bi-chat-left-text"></i>  Servicio al Cliente</a>
          </li>
        </li>
          <li class="nav-item">
            <a class="nav-link  active"   href=" " ><i class="bi bi-shop"></i>  Catálogo</a>
          </li>
          <hr class="divider">
          <li class="nav-item">
            <a class="nav-link  active"   href="{{ route('logout')}} " ><i class="bi bi-box-arrow-right"></i></a>
          </li>
          <!--
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
-->
      </div>
    </div>
  </div>
</nav>