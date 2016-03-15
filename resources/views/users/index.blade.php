@extends('layout.app')

@section('content')
    <div class="page-header text-center">
        <h1>Users that we currently have in our system!</h1>
    </div>
    <div class="row">

        <div class="col-xs-12">

            <table id="users"></table>

        </div>

    </div>
@endsection

@push('scripts')
    <script src="{{ URL::asset('js/dt_custom.js') }}"></script>
@endpush