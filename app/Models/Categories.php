<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = ['name'];


    public function storedData($data)
    {
        $results = Categories::create($data);
        return $results;
    }

    public function addBook($bookId)
    {
        $this->books()->attach($bookId);
    }

    public function books()
    {
        return $this->belongsToMany(Books::class, 'book_category', 'category_id', 'book_id');
    }
}
