@extends('layouts.admin')

@section('content')

    @include('parts.header')

    @include('parts.errors')

    <div class="row">
        <div class="col-xs-4 col-xs-push-4">
            <form class="form-signin" method="POST" action="/user/store">
                {{ csrf_field() }}
                <h2 class="form-signin-heading">Add user</h2>
                <div class="form-group">
                    <label for="name">Name </label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" autofocus>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email address">
                </div>

                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">

                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Create User</button>
            </form>
        </div>
    </div> <!-- /container -->
@endsection

