<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class BookController extends Controller
{
    public function index()
    {
        return Book::get();
    }

    public function store(Request $request)
    {
        return Book::create([
            "title" => $request->input('title'),
            "description" => $request->input('description'),
            "author" => $request->input('author'),
            "publisher" => $request->input('publisher'),
            "date_of_issue" => $request->input('date_of_issue'),
        ]);
    }

    public function show($id)
    {
        return Book::find($id);
    }

    public function update(Request $request, $id)
    {
        return book::find($id)->update([
            "title" => $request->input('title'),
            "description" => $request->input('description'),
            "author" => $request->input('author'),
            "publisher" => $request->input('publisher'),
            "date_of_issue" => $request->input('date_of_issue'),
        ]);
    }

    public function destroy($id)
    {
        return Book::destroy($id);
    }
}