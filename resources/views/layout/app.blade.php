<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Blade Templates</title>
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('js/jquery.min.js') }}" rel="stylesheet">
</head>

<body>
@yield('header')

@yield('content')

@yield('footer')
</body>
</html>