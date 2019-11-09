@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p>This is child sidebar.</p>
@endsection

@section('content')
    <p>This is child contents.</p>
@endsection
