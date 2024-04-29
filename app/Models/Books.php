<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table = 'books';

    protected $fillable = ['title', 'author', 'sinopsis', 'story', 'image', 'is_active'];

    public function storedData($data){
        $results = Books::create($data);
        return $results;
    }
}
