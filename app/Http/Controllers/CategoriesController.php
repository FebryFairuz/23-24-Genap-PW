<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCategoriesRequest;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        return view("pertemuan-7.admin_temp.categories.index")->with([
            'categories'=>$categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pertemuan-7.admin_temp.categories.create");
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
    public function edit($id){
    $category = Categories::find($id);
    return view("pertemuan-7.admin_temp.categories.edit", [
        "category" => $category
    ]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $categories)
{
    // Mengupdate data kategori dengan nama yang baru
    $newName = [
        "name" => $request->input("name")
    ];

    $result = $categories->where("id", $categories->id)->update($newName);

    if ($result) {
        // Jika pembaruan berhasil, arahkan pengguna ke halaman categories-books
        return redirect()->to('/categories-books');
    } else {
        // Jika pembaruan gagal, kembalikan pengguna ke halaman sebelumnya dengan pesan kesalahan
        return back()->with('error', 'Failed to update category');
    }
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories)
    {
        $categories->delete();
        return redirect()->to('categories-books')
                         ->with('success','Category deleted successfully');
    }
}
