<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DEACOURSE LARAVEL</title>
</head>

<body>
    <div>
        <header>
            <nav><a href="/">HOME</a></nav>
            <nav><a href="/login">LOGIN</a></nav>
        </header>
            {{-- our content --}}
        <div>
                @yield('content')
        </div>
            {{-- end of our content --}}
        <fotter>&copy; Deacourse-Laravel Made with Love</fotter>
    </div>
</body>

</html>