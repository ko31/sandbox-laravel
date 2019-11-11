<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Book;

class HelloController extends Controller
{
    public function index()
    {
        return 'Hello world!';
    }

    public function view()
    {
        $data = [
            'msg'   => 'こんにちは、世界！',
        ];

        return view('hello.view', $data);
    }

    public function list()
    {
        $data = [
            'records' => Book::all(),
        ];

        return view('hello.list', $data);
    }

    public function directive()
    {
        $data = [
            'raw' => '<img src="http://placehold.jp/200x50.png" />',
            'random' => random_int(1, 100),
            'msg' => 'Hello World!',
            'msg3' => '',
            'records' => [
                '1' => 'taro',
                '2' => 'jiro',
                '3' => 'saburo',
            ],
            'weeks' => [ 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'San' ],
        ];

        return view('hello.directive', $data);
    }

    public function child()
    {
        $data = [];

        return view('hello.child', $data);
    }
}
