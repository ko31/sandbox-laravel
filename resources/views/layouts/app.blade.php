<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
</head>
<body>

<header>
    @section('header')
        <hr>
    @show
</header>

<div class="container">
    @yield('content')
</div>

</body>
</html>