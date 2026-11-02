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
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Főoldal</a></li>
                    <li><a href="/introduction">Adatbázis / Bevezető</a></li>
                    <li><a href="/exercise1">Kapcsolat</a></li>
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