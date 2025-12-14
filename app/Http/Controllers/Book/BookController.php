<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            [ "title" => "The Alchemist", "author" => "Paulo Coelho", "price"=> 15 ],
            [ "title" => "1984", "author" => "George Orwell", "price"=> 12 ],
            [ "title" => "Harry Potter", "author" => "J.K. Rowling", "price"=> 20 ],
            [ "title" => "Atomic Habits", "author" => "James Clear", "price"=> 18 ],
        ];

        return view('books.index', ['books' => $books]);
    }
}
