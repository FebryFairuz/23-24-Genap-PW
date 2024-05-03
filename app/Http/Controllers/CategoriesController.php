<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCategoriesRequest;
use App\Models\Books;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Books::all(); // Assuming you have a Book model
        $categories = Categories::all(); // Assuming you have a Category model
        return view("pertemuan-7.admin_temp.categories.index", compact('books', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
public function create()
    {
        $categories = Categories::all(); // Assuming you have a Category model
        return view("pertemuan-7.admin_temp.categories.create", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $resxult = Categories::create($request->all());
        return redirect()->to('categories-books');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriesRequest $request, Categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories)
    {
        //
    }
}
