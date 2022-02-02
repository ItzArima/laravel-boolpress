<header>
    <div class="header-container">
        <div class="left">
            <div class="logo">
                <h1>BoolPress</h1>
            </div>
        </div>
        <div class="center">
            <nav>
                <ul>
                    @foreach(config('header_links') as $item)
                        <li><a href="{{route($item['href'])}}">{{$item['name']}}</a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
        <div class="right">
            <nav>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <div class="authenticated">
                        <p id="navbarDropdown" class="nav-link dropdown-toggle">
                            {{ Auth::user()->name }} <span><i class="fas fa-chevron-down"></i></span>
                        </p>
                        <div class="dropdown">
                            <a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                       </div>
                    </div>
                @endguest
            </nav>
        </div>
    </div>
</header>

