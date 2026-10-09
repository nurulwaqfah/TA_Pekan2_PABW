<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'LaporBanjir')
    </title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header class="header">

        <div class="container navbar">

            <a href="{{ route('laporan.index') }}" class="logo">
                LaporBanjir
            </a>

            <nav>

                <a href="{{ route('laporan.index') }}">
                    Daftar Laporan
                </a>

                <a href="{{ route('laporan.form') }}">
                    Lapor Banjir
                </a>

            </nav>

        </div>

    </header>


    <main>

        @yield('content')

    </main>

    <footer class="footer">

        <p>
            &copy; 2026 LaporBanjir - BPBD Kabupaten Bandung
        </p>

    </footer>


    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>