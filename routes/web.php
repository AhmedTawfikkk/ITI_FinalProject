<?php

use Illuminate\Support\Facades\Route;

//home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Student Dashboard
Route::get('student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');

// View all books
Route::get('books', [BookController::class, 'index'])->name('books.index');

// View details of a single book
Route::get('books/{book}', [BookController::class, 'show'])->name('books.show');

// Borrow a book
Route::post('books/{book}/borrow', [BookController::class, 'borrow'])->name('books.borrow');

// Return a borrowed book
Route::post('books/{book}/return', [BookController::class, 'return'])->name('books.return');

// View borrowed books and return details
Route::get('student/borrowed-books', [StudentController::class, 'viewBorrowedBooks'])->name('student.borrowedBooks');

// Update student profile
Route::get('student/profile', [StudentController::class, 'editProfile'])->name('student.profile.edit');
Route::post('student/profile', [StudentController::class, 'updateProfile'])->name('student.profile.update');

