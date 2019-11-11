@extends('layouts.app')

@section('title', 'Books List')

@section('header')
    <p>This is books list.</p>
    @parent
@endsection

@section('content')
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

        <!-- Collections -->
        @each('subviews.book',$records, 'record', 'subviews.book_empty')

        </tbody>
    </table>
@endsection
