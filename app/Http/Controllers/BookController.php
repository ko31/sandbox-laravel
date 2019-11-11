<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        // to do something
    }

    public function list()
    {
        $data = [
            'records'=> Book::all(),
        ];

        return view('book.list', $data);
    }

    public function view(int $id)
    {
        $data = [
            'records'=> Book::where('id', $id)->get(),
        ];

        return view('book.list', $data);
    }
}
