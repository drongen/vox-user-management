<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$title or 'Laravel Blade Templates'}}</title>
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('js/jquery.min.js') }}" rel="stylesheet">
</head>

<body>
@yield('header')

<div class="container">
@yield('content')
</div>

@yield('footer')
</body>
</html>