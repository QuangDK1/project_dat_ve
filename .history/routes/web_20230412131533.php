<?php

use App\Http\Controllers\MovieController;
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

Route::get('/', [MovieController::class, 'index'])->name('index');
Route::get('/movie/{id}', [MovieController::class, 'movie'])->name('movie');

Route::get('/dangky', function () {
    return view('register');
})->name('dangky');
Route::get('/movieAdmin', function () {
    return view('movieAdmin');
})->name('movieAdmin');
Route::get('/movieLoginAdmin', function () {
    return view('movieLoginAdmin');
})->name('movieLoginAdmin');
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