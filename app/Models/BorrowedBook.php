<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowedBook extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'book_id',
        'returned',
        'return_date',
    ];

    public function user(){
        $this->belongsTo(User::class);
    }
    public function book(){
        $this->belongsTo(Book::class);
    }
}
