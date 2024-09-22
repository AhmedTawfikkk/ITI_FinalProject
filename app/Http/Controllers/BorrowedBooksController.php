<?php

namespace App\Http\Controllers;
use App\Models\BorrowedBook;
use Illuminate\Http\Request;

class BorrowedBooksController extends Controller
{
    //
    public function index(){
        $books=BorrowedBook::all();

        return view('borrowedbooks.index',["books"=>$books]);
    }
}
