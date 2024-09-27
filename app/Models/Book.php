<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'cover',
        'description',
        'Genre',
        'published',
        'author_name'
    ];

    public function borrowedBooks(){

        return $this->hasMany(BorrowedBook::class);
    }

    public function author(){

        return $this->belongsTo(Author::class);
    }
}
