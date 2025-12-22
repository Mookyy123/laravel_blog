<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // public function index()
    // {
    //     $books = [
    //         [ "title" => "The Alchemist", "author" => "Paulo Coelho", "price"=> 15 ],
    //         [ "title" => "1984", "author" => "George Orwell", "price"=> 12 ],
    //         [ "title" => "Harry Potter", "author" => "J.K. Rowling", "price"=> 20 ],
    //         [ "title" => "Atomic Habits", "author" => "James Clear", "price"=> 18 ],
    //     ];

    //     return view('books.index', ['books' => $books]);
    // }

    // List all books
    public function index()
    {
        $books = Book::all();
        // dd($books);  // Debug all books

        return view('books.index', compact('books'));
    }

    // Show create form
    public function create()
    {
        return view('books.create');
    }

    // Store new book
    public function store(Request $request)
    {
        $book = Book::create($request->all());
        dd($book);  // Debug newly created book

        return redirect()->route('books.index');
    }

    // Show edit form
    public function edit($id)
    {
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

    // Update book
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->update($request->all());
        dd($book);  // Debug updated book

        return redirect()->route('books.index');
    }

    // Delete book
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        dd("Book $id deleted");  // Debug deletion

        return redirect()->route('books.index');
    }
}
