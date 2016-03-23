@if (session('error_message'))
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="alert alert-danger">
                    <strong>Whoops! Something went wrong!</strong>

                    <br><br>

                    <p>{{ session('error_message') }}</p>
                </div>
            </div>
        </div>
    </div>
@endif