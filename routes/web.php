<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('components/navbar');
});

Route::any('/', [LogoController::class, 'get_logo'])->name('navbar.logo');
Route::any('/books', [BooksController::class, 'index'])->name('books.page');
// Route::any('admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');