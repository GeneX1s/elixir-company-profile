<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|
| Web Routes
|
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', [IndexController::class, 'index']);



// Route::get('/login', [LoginController::class, 'index'])->name('login')>middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);
// Route::get('/register', [RegisterController::class, 'index'])>middleware('guest');
// Route::post('/register', [RegisterController::class, 'store']);


Route::get('/', function () {
    return view('index2');
})->name('index2');
Route::get('/index2', function () {
    return view('index2');
})->name('index2');

Route::get('/indexheadersliderclassic', function () {
    return view('indexheadersliderclassic');
})->name('indexheadersliderclassic');

Route::get('/indexheaderstatic', function () {
    return view('indexheaderstatic');
})->name('indexheaderstatic');
Route::get('/indexheaderstaticclassic', function () {
    return view('indexheaderstaticclassic');
})->name('indexheaderstaticclassic');
Route::get('/indexheaderyoutubevideo', function () {
    return view('indexheaderyoutubevideo');
})->name('indexheaderyoutubevideo');
Route::get('/indexheaderyoutubevideoclassic', function () {
    return view('indexheaderyoutubevideoclassic');
})->name('indexheaderyoutubevideoclassic');
Route::get('/indexheaderselfhostedvideo', function () {
    return view('indexheaderselfhostedvideo');
})->name('indexheaderselfhostedvideo');
Route::get('/indexheaderselfhostedvideoclassic', function () {
    return view('indexheaderselfhostedvideoclassic');
})->name('indexheaderselfhostedvideoclassic');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/alumni', function () {
    return view('alumni');
})->name('alumni');
Route::get('/blank', function () {
    return view('blank');
})->name('blank');
Route::get('/404', function () {
    return view('404');
})->name('404');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/registration', function () {
    return view('registration');
})->name('registration');
Route::get('/newsroom', function () {
    return view('newsroom');
})->name('newsroom');
Route::get('/news', function () {
    return view('news');
})->name('news');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
