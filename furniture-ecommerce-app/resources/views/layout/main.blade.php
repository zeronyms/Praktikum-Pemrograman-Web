<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage - Furniture</title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}" />
    <script src="https://kit.fontawesome.com/16ffd14b17.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- Content -->
    @yield('content')
    <!-- footer -->
    @include('partials.footer')

    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
