<nav class="navbar navbar-expand-md navbar-light bg-light shadow py-3">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <i class="fas fa-tooth"></i>   
        Clinica Dental
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                  @if (Route::has('login'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">Acceso <i class="far fa-user"></i></a>
                      </li>
                  @endif
                  
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">Registro</a>
                      </li>
                  @endif
              @else

                  
                <li class="nav-item">
                  <a class="nav-link mr-4 active" href="{{route('pacientes.index')}}">Pacientes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mr-4" href="{{route('consultas.index')}}">Consultas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mr-4" href="{{route('empleados.index')}}">Empleados</a>             
                </li>
                                  


                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button class="p-2 btn btn-outline-dark btn-sm" type="submit">
                    Salir <i class="fas fa-sign-out-alt"></i> </button>
                </form>           
              @endguest
          </ul>
      </div>
  </div>
</nav>
         
                 
                    
         
        
          
            
           
           
         
            

            
                
                  
           