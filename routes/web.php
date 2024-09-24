<?php

use App\Http\Middleware\CheckAdminRole;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BorrowedBooksController;



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

Route::get('/', [HomeController::class, 'index'])->middleware(RedirectIfAuthenticated::class)->name('home');

// Route::middleware(['auth', CheckStudentRole::class])->group(function () {
// Student Dashboard
Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');

// View all books
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// View details of a single book
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');

// Borrow a book
Route::post('/books/{book}/borrow', [BookController::class, 'borrow'])->name('books.borrow');

// Return a borrowed book
Route::post('/books/{book}/return', [BookController::class, 'return'])->name('books.return');
//return the student profile
Route::get('/student/profile',[StudentController::class,'viewprofile'])->name('student.profile');

// Update student profile
//Route::get('/student/profile/edit', [StudentController::class, 'editProfile'])->name('student.profile.edit');

//upload the photo in db
Route::post('/student/profile/edit/photo',[StudentController::class,'uploadphoto'])->name('upload.photo');

//Route::post('/student/profile', [StudentController::class, 'updateProfile'])->name('student.profile.update');






Route::middleware(['auth', CheckAdminRole::class])->group(function () {
    route::get('/admin/borrowed-books',[BorrowedBooksController::class,'index']);
});