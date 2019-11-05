<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
