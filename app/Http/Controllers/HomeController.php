<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Books $book){
        $book = Books::all();
        return view('pertemuan-7.admin_temp.Home', ["books" => $book]);
    }
}
