@extends('../layouts.default')

@section('content')

    <div class="flex-center position-ref full-height">
            
        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    left side
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </div>
                <div class="col-md-6">
                    right side
                    <button type="button" class="btn btn-primary">Test Bootstrap</button>
                </div>
            </div>
        </div>

        </div>
    </div>

@endsection