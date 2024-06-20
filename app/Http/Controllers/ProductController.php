<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $books = [
            ['title' => 'I Feel About My Neck',
            'author' => 'Nora Ephron ',
            'year' => '2006'],

            ['title' => 'Broken Glass',
            'author' => 'Alain Mabanckou',
            'year' => '2005'],
        ];

        return view('books', compact('books'));
    }
}