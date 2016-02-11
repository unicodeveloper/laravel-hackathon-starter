<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <title>Laravel Hackathon Starter App</title>
    <meta name="description" content="This is a boilerplate for building Hackathon apps">

    <script src="{{ asset('js/app.js') }}"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/fonts/fontawesome-webfont.ttf">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    @include('layouts.partials.navbar')
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <div class="container text-center">
        <p class="pull-left">© 2015 Company, Inc. All Rights Reserved</p>
        <ul class="pull-right list-inline">
            <li>
                <a href="https://github.com/unicodeveloper/hackathon-starter">GitHub Project</a>
            </li>
            <li>
                <a href="https://github.com/unicodeveloper/hackathon-starter/issues">Issues</a>
            </li>
        </ul>
        </div>
    </footer>
</body>
</html>
