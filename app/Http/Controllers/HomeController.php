<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Books $book)
    {
        $book = Books::all();
        $booksByCreatedAt = Books::orderByDesc('created_at')->limit(5)->get();
        $booksByRating = Books::orderByDesc('rating')->where('rating', '>', 3)->limit(5)->get();
        return view('pertemuan-7.admin_temp.Home', [
            "books" => $book,
            "booksByCreatedAt" => $booksByCreatedAt,
            "booksByRating" => $booksByRating
        ]);
    }
}
