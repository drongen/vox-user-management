@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>Welcome to Laravel 5 templating</h1>

                <p>User: {{ $name }}</p>
            </div>

            <div class="col-xs-12">
                <h2>People:</h2>
                <ul>
                    @foreach ($people as $name => $title)

                        @if ($name != "Aleks")
                            <li>{{ $name .' is a '. $title }}</li>
                        @endif
                    @endforeach

                </ul>
            </div>

            <div class="col-xs-12">
                <h2>Personal Details</h2>
                <p>Name: {{ $user->name }}</p>
                <p>Surname: {{ $user->surname }}</p>
                <p>Country: {{ $user->country }}</p>
            </div>
        </div>
    </div>
@endsection
