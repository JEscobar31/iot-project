<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Import font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/axentix@0.5.3/dist/css/axentix.min.css" />
</head>

<body class="layout">
    <main>
        @yield('content')
    </main>

    <footer class="footer primary">
        IOT © 2020 - Station météo d'intérieur
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/axentix@0.5.3/dist/js/axentix.min.js"></script>
</body>

</html>