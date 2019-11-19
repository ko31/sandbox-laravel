<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Book;

// DB
use DB;

class BookController extends Controller
{
    public function index()
    {
        // to do something
    }

    public function list()
    {
        $data = [
            'records' => Book::all(),
        ];

        return view('book.list', $data);
    }

    public function view(int $id)
    {
        $data = [
            'records' => Book::where('id', $id)->get(),
        ];

        return view('book.list', $data);
    }

    public function where()
    {
        $data = [
//            'records'=> Book::where('title', 'LIKE', '%ホーム%')->get(),
//          'records' => Book::whereIn( 'title', [ '報知高校野球', 'ホームラン' ] )->get(),
//          'records' => Book::whereBetween( 'price', [ 800, 900 ] )->get(),
//            'records'=> Book::whereYear('published', '2019')->get(),
//            'records'=> Book::where('price', '>=', 800)
//                            ->where('price', '<', 900)
//                            ->get(),
            'records' => Book::whereRaw('? <= price AND price <= ?', [ 800, 1000 ])->get(),
        ];

        return view('book.list', $data);
    }

    public function clause()
    {
        $data = [
            'records' => Book::select('title', 'price', 'publisher', 'published')
                             ->orderBy('price', 'ASC')
                             ->offset(0)
                             ->limit(10)
                             ->get(),
        ];

        return view('book.list', $data);
    }

    public function query()
    {
        $sql  = 'SELECT * FROM books ORDER BY price ASC';
        $data = [
            'records' => DB::select($sql),
        ];

        return view('book.list', $data);
    }

    public function reviews()
    {
        $data = [
            'records' => Book::all(),
        ];

        return view('book.list', $data);
    }
}
