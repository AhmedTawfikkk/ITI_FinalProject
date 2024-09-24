<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BorrowedBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index(){
        $books=Book::where('available',true)->get();

        return view('books.index',compact('books'));
    }

    public function show( $book){
        $book=Book::find($book);
        return view('books.show',compact('book'));
    }

    public function borrow($book_id){
        $book=Book::find($book_id);
        $book->available=false;
        $book->save();
        $borrowedbook=BorrowedBook::create([
            'user_id'=>Auth::id(),
            'book_id'=>$book_id,
        ]);

        return redirect()->route('books.index',)->with('success', 'You have successfully borrowed the book!');

    }

    public function return($borrowedbook_id){
        $borrowedbook=BorrowedBook::find($borrowedbook_id);
        $borrowedbook->returned=true;
        $borrowedbook->save();

        $book=Book::find($borrowedbook->book_id);
        $book->available = true;
        $book->save();

        return back()->with('success', 'the book returned successfully');

    }
    public function create()
    {
        return view('createBook');
    }
    public function store(Request $request)
    {
        $data=$request->all();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'Genre'=> 'required',
            'published'=> 'required',
            'cover'=> 'required',
        ]);

        $Book=new Book;
        $Book->title=$data['title'];
        $Book->body=$data['body'];
        
        $Book->created_at = now();
        $Book->updated_at = now();
        $Book->user_id=Auth::id();
        $Book->save();
        return redirect('/posts');
    }
    public function edit(string $id)
    {
        $Book=Book::find($id);
       
        return view('update',['Book' => $Book]);
    }
    public function update(Request $request, string $id)
    {
        $post=post::find($id);
        $post->title = $request['title'];
        $post->body = $request['body'];
        $post->updated_at = now();
        $post->save();
        return redirect('/posts');

    }
    public function destroy(string $id)
    {
        $Book = Book::find($id);
        $Book->delete();
        return redirect('/posts');
    }
}
