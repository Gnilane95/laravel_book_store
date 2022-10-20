<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('updated_at','desc')->paginate(10);
        return view('pages.home', compact('books'));
    }

    /**
     * Show the form for creating a new book.
     *
     * @return void
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created book in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' =>'required|string|max:200',
            'description' =>'required|string|max:1000',
            'price' =>'required',
            'author' =>'required|string|max:50',
            'nombre_pages' =>'required|numeric',
            'url_img'=>'required|image|mimes:png,jpg,jpeg,webp|max:5000'
        ]);
        $validateImg = $request->file('url_img')->store('img-books');
        Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'author' => $request->author,
            'nombre_pages' => $request->nombre_pages,
            'url_img' => $validateImg,
            'updated_at' => now()
        ]);
        return redirect()->route('home')->with('status','Livre ajouté');
    }

    /**
     * Show the specified book.
     *
     * @param  int  $id
     * @return void
     */
    public function show(Book $book)
    {
        return view('pages.show', compact('book'));
    }

    /**
     * Show the form for editing the specified book.
     *
     * @param  int  $book
     * @return void
     */
    public function edit(Book $book)
    {
        return view('pages.edit', compact('book'));
    }

    /**
     * Update the specified book in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return void
     */
    public function update(Request $request, Book $book)
    {
        if($request->hasFile('url_img')){
            Storage::delete($book->url_img);
            $book->url_img = $request->file('url_img')->store('img_books');
        }
        $request->validate([
        'title' =>'required|string|max:200',
        'description' =>'required|string|max:1000',
        'price' =>'required',
        'author' =>'required|string|max:50',
        'nombre_pages' =>'required|numeric',
        'url_img'=>'required|sometimes|image|mimes:png,jpg,jpeg,webp|max:5000'
        ]);

        $book->update([
        'title' => $request->title,
        'description' => $request->description,
        'price' => $request->price,
        'author' => $request->author,
        'nombre_pages' => $request->nombre_pages,
        'url_img' => $book->url_img,
        'updated_at' => now()
        ]);
        return redirect()->route('books.show', $book->id)->with('status','Livre modifié');
    }

    /**
     * Remove the specified book from storage.
     *
     * @param  int
     * @return void $id
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('home')->with('status','Livre supprimé');
    }
}
