<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello</title>
</head>
<body>
<p>{{ date('Y/m/d H:i:s') }}</p>
<p>{{$msg}}</p>
</body>
</html>
