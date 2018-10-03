<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header class="navbar navbar-fixed-top navbar-inverse">
        <nav>
            <a href="/">
                Lorem
                <img src="/img/logo.png">
            </a>
            @yield('nav')
        </nav>
    </header>

    @yield('content')
</body>
</html>