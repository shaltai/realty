<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/jquery.flipster.min.css">

    @if(empty($theme))
    <link rel="stylesheet" href="/css/buy.css?t={{ time() }}">
    @else
    <link rel="stylesheet" href="/css/{{ $theme }}.css?t={{ time() }}">
    @endif

    <title>Вся недвижимость — $city</title>

</head>

<body>
    @yield('content')
</body>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="/js/jquery.flipster.min.js"></script>
<script src="/js/main.js"></script>

</html>
