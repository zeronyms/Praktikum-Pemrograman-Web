<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())
}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>Selamat Datang</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>

<body>
    <h1>Selamat Datang!</h1>
    <p>Nama: {{ $data['name'] }}</p>
    <p>Email: {{ $data['email'] }}</p>

    <p>Pesanan:</p>
    <ul>
        @foreach($data['pesan'] as $itemId => $quantity)
        @if($quantity > 0)
        <li>
            {{ $quantity }} x {{$menuItems[$itemId]['name'] }} (Rp {{$menuItems[$itemId]['harga'] }})
        </li>
        @endif
        @endforeach
    </ul>
    <p>Total Belanjaan: Rp {{ $data['total'] }}</p>
</body>

</html>