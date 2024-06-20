<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $booksData = array(
            ['title1' => 'I Feel Bad About My Neck',
            'author1' => 'Nora Ephron',
            'year' => '2006'
            ]
        );
        return view("books", $booksData);
    }
}