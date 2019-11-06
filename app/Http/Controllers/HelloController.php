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
}
