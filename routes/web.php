<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;



//breeze auth
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Our Routes        

//home
Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('home');

// Student Dashboard
Route::get('student/dashboard', [StudentController::class, 'dashboard'])->middleware('auth')->name('student.dashboard');

// View all books
Route::get('books', [BookController::class, 'index'])->middleware('auth')->name('books.index');

// View details of a single book
Route::get('books/{book}', [BookController::class, 'show'])->middleware('auth')->name('books.show');

// Borrow a book
Route::post('books/{book}/borrow', [BookController::class, 'borrow'])->middleware('auth')->name('books.borrow');

// Return a borrowed book
Route::post('books/{book}/return', [BookController::class, 'return'])->middleware('auth')->name('books.return');

// View borrowed books and return details
Route::get('student/borrowed-books', [StudentController::class, 'viewBorrowedBooks'])->middleware('auth')->name('student.borrowedBooks');

// Update student profile
Route::get('student/profile', [StudentController::class, 'editProfile'])->middleware('auth')->name('student.profile.edit');
Route::post('student/profile', [StudentController::class, 'updateProfile'])->middleware('auth')->name('student.profile.update');
