<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
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