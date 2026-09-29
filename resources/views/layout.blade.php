<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'LaporBanjir')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <a href="{{ route('home') }}" class="logo">
                LaporBanjir
            </a>

            <a href="{{ route('lapor.form') }}" class="nav-button">
                Lapor Banjir
            </a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>