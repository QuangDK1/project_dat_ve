<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ChairController;
use App\Http\Controllers\PhimController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});
//page
Route::get('/', [MovieController::class, 'index'])->name('index');
Route::get('/movie/{id}', [MovieController::class, 'movie'])->name('movie');

Route::get('/dangky', function () {
    return view('register');
})->name('dangky');
Route::post('/register', [UserController::class, 'register']);
Route::get('/insert-User', [UserController::class, 'insert_User']);

//admin
Route::get('/movieAdmin', function () {
    return view('movieAdmin');
})->name('movieAdmin');
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::get('/logout', [AdminController::class, 'logout']);
Route::post('/movieAdmin', [AdminController::class, 'dashboard']);

Route::get('/movieAddCategory', function () {
    return view('movieAddCategory');
})->name('movieAddCategory');
Route::get('/movieCategory', function () {
    return view('movieCategory');
})->name('movieCategory');
Route::get('/movieTicket', function () {
    return view('movieTicket');
})->name('movieTicket');
Route::get('/movieAddTicket', function () {
    return view('movieAddTicket');
})->name('movieAddTicket');
Route::get('/chair', function () {
    return view('chair');
})->name('chair');
Route::get('/movieAddTicket', function () {
    return view('movieAddTicket');
})->name('movieAddTicket');
Route::get('/movieLoginAdmin', function () {
    return view('movieLoginAdmin');
})->name('movieLoginAdmin');

//User
Route::get('/movieUser', [UserController::class, 'all_User'])->name('movieUser');
Route::get('/add-User', [UserController::class, 'add_User']);
Route::get('/edit-User/{IDKH}', [UserController::class, 'edit_User']);
Route::get('/delete-User/{IDKH}', [UserController::class, 'delete_User']);
Route::get('/all-User', [UserController::class, 'all_User']);
Route::post('/save-User', [UserController::class, 'save_User']);
Route::post('/update-User', [UserController::class, 'update_User']);
//Category
Route::get('/movieCategory', [CategoryController::class, 'all_Category'])->name('movieCategory');
Route::get('/add-Category', [CategoryController::class, 'add_Category']);
Route::get('/all-Category', [CategoryController::class, 'all_Category']);
Route::post('/save-Category', [CategoryController::class, 'save_Category']);
Route::get('/edit-Category/{IDTheLoai}', [CategoryController::class, 'edit_Category']);
Route::get('/delete-Category/{IDTheLoai}', [CategoryController::class, 'delete_Category']);
Route::post('/update-Category', [CategoryController::class, 'update_Category']);

//Login
Route::get('/trang-chu', [LoginController::class, 'trang_chu']);
Route::post('/index', [LoginController::class, 'dang_nhap']);
Route::get('/logout', [LoginController::class, 'logout']);
//Movie
Route::get('/movieMovie', [PhimController::class, 'all_Movie'])->name('movieMovie');
Route::get('/add-Movie', [PhimController::class, 'add_Movie']);
Route::get('/all-Movie', [PhimController::class, 'all_Movie']);
Route::post('/save-Movie', [PhimController::class, 'save_Movie']);
Route::post('/add', [PhimController::class, 'add']);
//Chair
Route::get('/chair', [ChairController::class, 'all_Chair'])->name('chair');
Route::get('/add-Chair', [ChairController::class, 'add_Chair']);
Route::get('/all-Chair', [ChairController::class, 'all_Chair']);
Route::post('/save-Chair', [ChairController::class, 'save_Chair']);

Route::get('/delete-Chair/{IDGhe}', [ChairController::class, 'delete_Chair']);