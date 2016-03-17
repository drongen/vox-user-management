@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">List of cars for: {{ $user->name }}</div>

                    <div class="panel-body">

                        @if (isset($cars))
                            <ul>
                                @foreach($cars as $car)
                                    <li>{{ $car->name }}</li>
                                @endforeach
                            </ul>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
