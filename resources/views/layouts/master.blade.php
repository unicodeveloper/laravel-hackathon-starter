<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <title>Laravel Hackathon Starter App</title>
    <meta name="description" content="This is a boilerplate for building Hackathon apps">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.12.0/bootstrap-social.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/fonts/fontawesome-webfont.ttf">
    <link rel="stylesheet" href="{{ load_asset('css/main.css') }}">
</head>
<body>
    @include('layouts.partials.navbar')
    <div class="container">
        @yield('content')
    </div>
    <footer class="footer">
        <div class="container text-center">
        <p class="pull-left">© 2015 Company, Inc. All Rights Reserved</p>
        <ul class="pull-right list-inline">
            <li>
                <a href="https://github.com/unicodeveloper/laravel-hackathon-starter">GitHub Project</a>
            </li>
            <li>
                <a href="https://github.com/unicodeveloper/laravel-hackathon-starter/issues">Issues</a>
            </li>
        </ul>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
