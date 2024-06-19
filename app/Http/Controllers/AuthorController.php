<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::paginate(10); // Modifica il numero di elementi per pagina secondo le tue esigenze
        return view('authors.index', compact('authors'));
    }
    
    public function create()
    {
        return view('authors.create');
    }
    
    public function store(StoreAuthorRequest $request)
    {
        Author::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
        ]);
        
        session()->flash('success', 'Autore creato correttamente');
        return redirect()->route('authors.index');
    }
    
    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }
    
    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }
    
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $author->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
        ]);
        
        session()->flash('success', 'Autore modificato correttamente');
        return redirect()->route('authors.index');
    }
    
    public function destroy(Author $author)
    {
        $author->delete();
        
        session()->flash('success', 'Autore cancellato correttamente');
        return redirect()->route('authors.index');
    }
}
