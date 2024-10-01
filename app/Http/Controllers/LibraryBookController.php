<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LibraryBook;

class LibraryBookController extends Controller
{
    public function index()
    {
        $libraryBooks = LibraryBook::all();
        return view('library-books.index', compact('libraryBooks'));
    }

    public function create()
    {
        return view('library-books.create');
    }

    public function store(Request $request)
    {
        $libraryBook = new LibraryBook();
        $libraryBook->title = $request->input('title');
        $libraryBook->author = $request->input('author');
        $libraryBook->publisher = $request->input('publisher');
        $libraryBook->published_date = $request->input('published_date');
        $libraryBook->isbn = $request->input('isbn');
        $libraryBook->quantity = $request->input('quantity');
        $libraryBook->save();
        return redirect()->route('library-books.index');
    }

    public function edit(LibraryBook $libraryBook)
    {
        return view('library-books.edit', compact('libraryBook'));
    }

    public function update(Request $request, LibraryBook $libraryBook)
    {
        $libraryBook->title = $request->input('title');
        $libraryBook->author = $request->input('author');
        $libraryBook->publisher = $request->input('publisher');
        $libraryBook->published_date = $request->input('published_date');
        $libraryBook->isbn = $request->input('isbn');
        $libraryBook->quantity = $request->input('quantity');
        $libraryBook->save();
        return redirect()->route('library-books.index');
    }

    public function destroy(LibraryBook $libraryBook)
    {
        $libraryBook->delete();
        return redirect()->route('library-books.index');
    }
}
