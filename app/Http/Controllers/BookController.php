<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use App\Models\Func;

class BookController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Book::class, 'book');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::orderBy('id', 'DESC')->paginate(20);

        return view('admin.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $picture = Func::uploadFile($_FILES['picture'], 'uploads');
        $file = Func::uploadFile($_FILES['book'], 'books');
        // $picture = $request->file('picture')->store('uploads', 'public');
        // $file = $request->file('book')->store('books', 'public');
        auth()->user()->book()->create([
            'title' => $request->title,
            'picture' => $picture,
            'file' => $file,
            'author' => $request->author,
        ]);

        return redirect()->route('book.index')->with('success', 'Book added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('admin.book.create', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $picture = Func::uploadFile($_FILES['picture'], 'uploads');
        $file = Func::uploadFile($_FILES['book'], 'books');
        // $picture = $request->file('picture')->store('uploads', 'public');
        // $file = $request->file('book')->store('books', 'public');
        $book->update([
            'title' => $request->title,
            'picture' => $picture,
            'file' => $file,
            'author' => $request->author,
        ]);

        return redirect()->route('book.index')->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('book.index')->with('success', ' Book deleted successfully');
    }
}
