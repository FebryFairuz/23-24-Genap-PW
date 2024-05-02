<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        $books = Books::all();
        return view("pertemuan-7.admin_temp.books.index")->with([
            'books'=>$books
        ]);
    }

    public function create(){
        return view("pertemuan-7.admin_temp.books.create");
    }

    public function store(Request $request){
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file= $request->file('image');
            $newFilename = time()."-".preg_replace('/\s+/', '-', $request->title).".jpg";
            $file->move(public_path('./assets/media/uploads/books'), $newFilename);
        }
        $dataPost = array(
            'title' => $request->title,
            'author' => $request->author,
            'sinopsis' => $request->sinopsis,
            'story' => $request->story,
            'is_active' => 1,
            'image' => $newFilename,
            'rating' => $request->rating
        );
        $result = Books::create($dataPost);

        if($result){
            $message = "Successfully saved";
        }else{
            $message = "Failed save";
        }
        return redirect()->to('catalog-books')->withErrors('info', $message);
    }
}
