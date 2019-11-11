@extends('layouts.app')

@section('title', 'Form')

@section('header')
    <p>This is form demo.</p>
    @parent
@endsection

@section('content')
    <form method="post" action="/ctl/form">
        <!-- CSRF Token -->
        @csrf
        <label id="name">Name:</label>
        <input id="name" name="name" type="text" value="" />
        <input type="submit" value="Send" />

        @if($result)
            <p>Hello! {{$result}}</p>
        @endif
    </form>
@endsection
