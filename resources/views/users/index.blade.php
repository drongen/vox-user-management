@extends('layout.app')

@section('content')
    <div class="page-header text-center">
        <h1>Users that we currently have in our system!</h1>
    </div>
    <div class="row">

        <div class="col-xs-12">

            <table id="users" class="display">
                <thead>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Password</td>
                    <td>Country</td>
                </tr>
                </thead>
            </table>

        </div>

    </div>
@endsection

@push('scripts')
<script src="{{ URL::asset('js/dt_custom.js') }}"></script>
@endpush