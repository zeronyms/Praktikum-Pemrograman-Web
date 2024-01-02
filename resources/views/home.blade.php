<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
</head>
<body>
    <h1>Weather App</h1>

    <form method="post" action="{{ route('get.weather') }}">
        @csrf
        <label for="city">Enter City:</label>
        <input type="text" name="city" required>
        <button type="submit">Get Weather</button>
    </form>

    @isset($weatherData)
        <h2>Weather for {{ $weatherData['name'] }}, {{ $weatherData['sys']['country'] }}</h2>
        <p>Temperature: {{ $weatherData['main']['temp'] }} &#8451;</p>
        <p>Weather: {{ $weatherData['weather'][0]['description'] }}</p>
    @endisset
</body>
</html>
