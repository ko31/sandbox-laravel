<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')
    <p>This is the master sidebar.</p>
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>