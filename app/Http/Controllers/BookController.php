<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BorrowedBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index(){
        $books=Book::with('author')->get();

        return view('books.index',compact('books'));
    }

    public function show( $book){
        $book=Book::with('author')->find($book);
        return view('books.show',compact('book'));
    }

    public function borrow($book){
        $borrowedbook=BorrowedBook::create([
            'user_id'=>Auth::id(),
            'book_id'=>$book,
        ]);

        return redirect()->route('books.index',)->with('success', 'You have successfully borrowed the book!');

    }
}
