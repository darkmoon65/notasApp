<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('panel') }}">Panel</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
            Notificaciones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <span>
              @if (isset($noti))
              $noti
              @else
              Notificacion ...
              @endif
            </span>
        </div>
      </li>
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
            {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <form method="POST" action="{{ route('salir') }}">
                @csrf
                <a class="dropdown-item" href="{{route('salir')}}" onclick="event.preventDefault(); this.closest('form').submit();">Salir</a>
            </form>
        </div>
      </li>
      
    </ul>
  </div>
</nav>