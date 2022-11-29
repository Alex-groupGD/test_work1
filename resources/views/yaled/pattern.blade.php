
<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <title> @yield('title-block') </title>

    <!-- Favicons -->

    <meta name="theme-color" content="#7952b3">




    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
</head>
<body class="d-flex h-100 text-center text-white bg-dark">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">Parking</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link active link-light" aria-current="page" href="{{route('main')}}">Главная страница</a>
                <a class="nav-link link-light"  href="{{route('park')}}">Парковка</a>
                <a class="nav-link link-light"  href="{{route('users.index')}}">Наши клиенты</a>
            </nav>
        </div>
    </header>

    <h1>
    @yield('title')
    </h1>

    @yield('content')


    <footer class="mt-auto text-white-50">
        <p>Сделано при помощи  <a href="https://laravel.com/" class="text-white">Laravel</a>, и  <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>.</p>
    </footer>

</div>

</body>
</html>
