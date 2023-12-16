<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())
}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>Pemesanan</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>

<body>
    <h1>Form Pemesanan</h1>
    <form method="post" action="{{ route('submit-order')
}}">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label>Pilihan Pesanan:</label><br>
        @foreach($menuItems as $menuItem)
        <div>
            <label for="{{ $menuItem['id'] }}">{{$menuItem['name'] }} (Rp {{ $menuItem['harga'] }})</label>
            <input type="number" id="{{$menuItem['id'] }}" name="pesan[{{ $menuItem['id'] }}]" min="0">
        </div>
        @endforeach
        <button type="submit">Submit Pesanan</button>
    </form>
</body>

</html>