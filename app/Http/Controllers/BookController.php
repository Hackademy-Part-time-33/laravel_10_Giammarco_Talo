<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookCreateRequest;
use App\Http\Requests\BookEditRequest;
use App\Models\Author;
use App\Models\Book;

class BookController extends Controller
{
    public function homepage()
    {
        $books = Book::all();
        return view('homepage', compact('books'));
    }
    
    public function index()
    {
        $books = Book::paginate(10);
        return view('books.index', compact('books'));
    }
    
    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }
    
    public function store(BookCreateRequest $request)
    {
        // Salvataggio dell'immagine
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
        }
        
        Book::create([
            'title' => $request->title,
            'year' => $request->year,
            'image' => $imagePath,
            'author_id' => $request->author_id,
        ]);
        
        session()->flash('success', 'Libro creato correttamente');
        return redirect()->route('books.index');
    }
    
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }
    
    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('books.edit', compact('book', 'authors'));
    }
    
    public function update(BookEditRequest $request, Book $book)
    {
        // Salvataggio dell'immagine
        $imagePath = $book->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
        }
        
        $book->update([
            'title' => $request->title,
            'year' => $request->year,
            'image' => $imagePath,
            'author_id' => $request->author_id,
        ]);
        
        session()->flash('success', 'Libro modificato correttamente');
        return redirect()->route('books.index');
    }
    
    public function destroy(Book $book)
    {
        $book->delete();
        
        session()->flash('success', 'Libro cancellato correttamente');
        return redirect()->route('books.index');
    }
}
