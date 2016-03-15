<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$title or 'Laravel Blade Templates'}}</title>
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/datatables/jquery.dataTables.css') }}" rel="stylesheet">
</head>

<body>
@yield('header')

<div class="container">
@yield('content')
</div>

<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/datatables/jquery.dataTables.js') }}"></script>
@stack('scripts')

@yield('footer')
</body>
</html>