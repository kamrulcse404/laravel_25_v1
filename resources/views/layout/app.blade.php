<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Welcome')</title>

    <link rel="stylesheet" href="style.css">

    @stack('blog_styles')
</head>

<body>

    <h1>Hello World</h1>
    <hr>

    @yield('nav')
    <hr>

    @yield('sidebar')
    <hr>

    @yield('content')

    @stack('blog_js')

</body>

</html>
