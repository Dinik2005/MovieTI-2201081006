<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/bootstrap/css_bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="images/ " href="/images/LOGO.png">


    <title>@yield('title')</title>

</head>

<body>

    @include('layout.navbar')

    @yield('container')

    @yield('content')

    @yield('detail')


    <footer class="bg-success text-white text-center p-3">
        <h5>Copyright &copy; {{ date('Y') }} by Dini Dama Yanti 2201081006</h5>
    </footer>

    <script src="bootstrap/js_bootstrap.bundle.min.js"></script>
</body>

</html>
