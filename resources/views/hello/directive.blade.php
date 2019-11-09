<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Derective</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">

            <h1>Directive Demo</h1>

            <h2>Raw</h2>

            <h3>This is raw.</h3>
            @{{ $raw }}

            <h3>This is sanitized.</h3>
            {{$raw}}

            <h3>This is not sanitized.</h3>
            {!! $raw !!}

            <h2>Comment</h2>

            <p>This following code is comment, and it is not visible.</p>

            {{--
            This is comment!
            --}}

            <h2>if</h2>

            @if($random < 50)
                <p>{{$random}} is less then 50.</p>
            @elseif ($random < 80)
                <p>{{$random}} is more then 50 and less than 80.</p>
            @else
                <p>{{$random}} is over 80.</p>
            @endif

            <h2>switch</h2>

            @switch($random)
                @case(10)
                <p>{{$random}} is 10.</p>
                @case(20)
                <p>{{$random}} is 20.</p>
                @case(30)
                <p>{{$random}} is 30.</p>
                @default
                <p>{{$random}} is other.</p>
            @endswitch

            <h2>unless</h2>

            @unless($random === 10)
                <p>{{$random}} is not 10.</p>
            @else
                <p>{{$random}} is 10.</p>
            @endunless

            <h2>isset/empty</h2>

            @isset($msg)
                <p>@{{ $msg }} is "{{$msg}}"</p>
            @endisset

            @isset($msg2)
                <p>@{{ $msg2 }} is {{$msg2}}</p>
            @else
                <p>@{{ $msg2 }} is not set.</p>
            @endisset

            @empty($msg2)
                <p>@{{ $msg2 }} is empty.</p>
            @endempty

            @empty($msg3)
                <p>@{{ $msg3 }} is empty.</p>
            @endempty

            <h2>foreach</h2>

            <ul>
                @foreach($records as $no => $name)
                    <li>{{$no}}:{{$name}}</li>
                @endforeach
            </ul>

            Let's look at the <code>loop</code> variable.

            <table class="table">
                <thead>
                <tr>
                    <td>Day</td>
                    <td>index</td>
                    <td>iteration</td>
                    <td>remaining</td>
                    <td>count</td>
                    <td>first</td>
                    <td>last</td>
                    <td>even</td>
                    <td>odd</td>
                    <td>depth</td>
                    <td>parent</td>
                </tr>
                </thead>
                <tbody>
                @foreach($weeks as $day)
                    <tr>
                        <td>{{$day}}</td>
                        <td>{{$loop->index}}</td>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$loop->remaining}}</td>
                        <td>{{$loop->count}}</td>
                        <td>{{$loop->first}}</td>
                        <td>{{$loop->last}}</td>
                        <td>{{$loop->even}}</td>
                        <td>{{$loop->odd}}</td>
                        <td>{{$loop->depth}}</td>
                        <td>{{$loop->parent}}</td>
                   </tr>
                @endforeach
                </tbody>
            </table>

            <h2>php</h2>

            @php
                echo sprintf('<p>%s</p>', 'this is PHP.');
            @endphp

            <?php
	            echo sprintf('<p>%s</p>', 'this is also PHP.');
            ?>

        </div>
    </div>
</div>

</body>
</html>
