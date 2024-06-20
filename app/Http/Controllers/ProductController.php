<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $books = [
            ['title' => 'I Feel About My Neck'],
            ['title' => 'Test2']
        ];

        return view('books', compact('books'));
    }
}