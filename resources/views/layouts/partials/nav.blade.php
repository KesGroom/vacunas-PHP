<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-primary text-white">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('storage/iconoWhite.png') }}" alt="Icono" style="width: 6rem; height: 5rem;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('/') }}">{{ __('Inicio') }}</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Iniciar sesisón') }}</a>
                    </li>
                @else
                    @if (Auth::user()->rol == 'EPS')
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('/') }}">{{ __('Inicio') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ url('Eps/crear') }}">{{ __('Contratar funcionario') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ url('Eps/mostrar') }}">{{ __('Ver funcionarios') }}</a>
                        </li>
            
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('/') }}">{{ __('Inicio') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ url('Persons/index') }}">{{ __('Ver personas registradas') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light"
                                href="{{ url('Persons/create') }}">{{ __('Registrar persona') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light"
                                href="{{ url('Persons/carnet') }}">{{ __('CVV') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light"
                                href="{{ url('Persons/vacunas') }}">{{ __('Vacunas') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light"
                                href="{{ url('emails/correo') }}">{{ __('Correo') }}</a>
                        </li>
                    @endif
                    <li></li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{ asset('storage/iniciosesion.png') }}" style="width: 1rem; height: 0.5;" class="align-self-start mr-3" alt="..." alt="">
                            {{ Auth::user()->username }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('Salir') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
