<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $books = \App\Book::all();

        foreach ($books as $book) {
            echo $book->name;
        }
        return view('home');
    }
}
