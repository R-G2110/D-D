<header>
    <header>
        <nav >
            <ul class="nav flex justify-content-center menu">
                <li class="nav-item">
                  <a class="nav-link change" href="{{ route('admin.home') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link change" href="{{route('admin.characters.index')}}">Lista personaggi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link change" href="{{route('admin.characters.create')}}">Crea personaggio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle change" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Altro
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ url('dashboard') }}">{{__('Dashboard')}}</a></li>
                      <li><a class="dropdown-item" href="{{ url('profile') }}">{{__('Profilo')}}</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a></li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                      </form>
                    </ul>
                  </li>
              </ul>
        </nav>
    </header>
</header>
