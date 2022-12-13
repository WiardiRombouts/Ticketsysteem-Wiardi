

<nav class="navbar navbar-expand-lg bg-danger">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="{{route('home')}}">Ticketsysteem</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/about-us">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ Route('contact') }}">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ Route('admin') }}">Admin</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            
            {{-- <li><a class="dropdown-item" href="{{ Route('event-list') }}">Evenementen Lijst</a></li> --}}
            @if (Auth::user())
           
              <li><a class="dropdown-item" href="{{ Route('ticket') }}">Tickets</a></li>
              <li><a class="dropdown-item" href="{{ Route('event-list')}}">Bekijk Evenementen</a></li>
              <li class="dropdown-item">
                <form action="{{route('logout')}}" method="POST">
                  @csrf
                  <li><hr class="dropdown-divider"></li>  
                  <button class="nav-link" type="submit">Uitloggen</button>
                </form>
              </li> 
              @else
              <li><hr class="dropdown-divider"></li>  
              <li class="dropdown-item">
                <a class = "dropdown-link" href="{{route('login')}}">Login</a>
              </li>
              <li class="dropdown-item">
                <a class = "dropdown-link" href="{{route('register')}}">Register</a>
              </li>
          @endif
            
          </ul>
        </li>
       
      </ul>
      
    </div>
  </div>
</nav>


