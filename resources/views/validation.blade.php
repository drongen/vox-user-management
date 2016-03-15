@extends('layout.app')

@section('content')

    <div class="row">
        <div class="col-xs-4 col-xs-push-4">
            <form class="form-signin">
                <h2 class="form-signin-heading">Please sign in</h2>

                <div class="alert-danger hidden error-name">
                    Name should be more then 5 character and it should not be Aleks!
                </div>
                <div class="form-group">
                    <label for="name">Name </label>
                    <input type="text" id="name" class="form-control" placeholder="Name" required autofocus>
                </div>

                <div class="form-group">
                    <label for="country">Country </label>
                    <input type="text" id="country" class="form-control" placeholder="Country" required>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                </div>

                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            </form>
        </div>
    </div> <!-- /container -->

@endsection

@push('scripts')
    <script src="{{ URL::asset('js/frontend-validation.js') }}"></script>
@endpush