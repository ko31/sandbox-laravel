<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
</head>
<body>

<table class="table">
    <thead>
    <tr>
        <td>Title</td>
        <td>Price</td>
        <td>Publisher</td>
        <td>Published</td>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)
        <tr>
            <td>{{$record->title}}</td>
            <td>{{$record->price}}</td>
            <td>{{$record->publisher}}</td>
            <td>{{$record->published}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
