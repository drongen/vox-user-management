@extends('layouts.admin')

@section('content')

    @include('parts.header')

    @include('parts.errors')

    <div class="row">
        <div class="col-xs-4 col-xs-push-4">
            <form class="form-signin" action="/user/update_user/{{ $user->id }}" method="POST">
                {{ csrf_field() }}
                <h2 class="form-signin-heading">Add user</h2>
                <div class="form-group">
                    <label for="name">Name </label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}" autofocus>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email address" value="{{ $user->email }}">
                </div>

                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">

                </div>

                <input type="hidden" name="id" id="id" value="{{ $user->id }}">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Update User</button>
            </form>
        </div>
    </div> <!-- /container -->
@endsection

