<nav class="navbar sticky-top shadow-sm">
    <div class="container">
        <a href="/"><img src="/img/logo.png" class="logo"></a>
        
        <div class="nav">    
            @guest
                <a href="#" class="nav-link">Матчи</a>
                <a href="#" class="nav-link">Результаты</a>
                <a href="#" class="nav-link">Новости</a>
                <a href="#" class="nav-link">Бомбардиры</a>
                <a href="#" class="nav-link">Фотогалерея</a>
                <a href="#" class="nav-link">Нарушители</a>
                <a href="#" class="nav-link">Регламент</a>
            @else
                <a href="{{ route('admin') }}" class="nav-link">Клубы</a>
                <a href="{{ route('showMatch') }}" class="nav-link">Матчи</a>
                <!-- <a href="#" class="nav-link">Результаты</a>
                <a href="#" class="nav-link">Новости</a> -->
                
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </div>
    </div>
</nav>