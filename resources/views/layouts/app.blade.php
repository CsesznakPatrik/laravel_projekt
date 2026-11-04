<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Web-programozás II Beadandó')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>


<body>
    <div id="wrapper">

        <header id="header">
            <nav id="nav">
                <ul class="container">
                    <li><a href="{{ route('home') }}">Főoldal</a></li>
                    <li><a href="#work">Adatbázis</a></li>
                    <li><a href="#portfolio">Diagram</a></li>
                    <li><a href="#contact">Kapcsolat</a></li>

                    @auth
                        @if(Auth::user()->role == 1)
                            <li><a href="/admin">CRUD</a></li>
                        @else
                            <li><a href="{{ route('user') }}">Üzenetek</a></li>
                        @endif

                        <li>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Kijelentkezés
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <li><a href="{{ route('login') }}">Bejelentkezés</a></li>
                        <li><a href="{{ route('register') }}">Regisztráció</a></li>
                    @endauth
                </ul>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer id="footer">
            <p class="copyright">&copy; Web-programozás II. Laravel Beadandó. Készítette: <strong>Csesznák Patrik
                    (TKUEUG),</strong>
                <strong>Zsarnóczay
                    Ádám</strong>
            </p>
        </footer>

    </div>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    @yield('scripts')
</body>

</html>