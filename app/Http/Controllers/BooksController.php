<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Categories;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        //$books = Books::all();
        $books = Books::with('categories')->get();
        return view("final-apps.admin_temp.books.index")->with([
            'books'=>$books
        ]);
    }

    public function create(){
        $categories = Categories::all();
        return view("final-apps.admin_temp.books.create", compact('categories'));
    }

    public function store(Request $request){
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file= $request->file('image');
            $newFilename = time()."-".preg_replace('/\s+/', '-', $request->title).".jpg";
            $file->move(public_path('./assets/media/uploads/books'), $newFilename);
        }
        $book = new Books;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->sinopsis = $request->sinopsis;
        $book->story = $request->story;
        $book->is_active = 1;
        $book->latitute = $request->latitute;
        $book->longtitute = $request->longtitute;
        $book->image = $newFilename;
        $book->save();

        $book->categories()->attach($request->input('categories'));

        $message = $book ? "Successfully saved" : "Failed save";
        return redirect()->to('catalog-books')->with('info', $message);
    }
}
