@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p>This is child sidebar.</p>
@endsection

@section('content')
    <p>This is child contents.</p>

    <p>The following is component.</p>
    @component('components.alert',[
        'type'=> 'success'
        ])
        @slot('alert_title')
            Component Title
        @endslot
        This contents is passed to the <code>$slot</code>.
    @endcomponent

    <p>The following is component by including Sub-Views.</p>
    @include('components.alert',[
        'type'=>'warning',
        'alert_title'=>'Component by Sub-Views',
        'slot'=>'This is component contents.',
    ])

@endsection
