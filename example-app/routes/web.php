<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');



//Route::post('/contact/submit', function () {
////    return Request::all(); //! return не отображает кирилицу
////    dd(Request::all()); // пользоваться пока этой командой для проверки
//    return "Okey!";
//})->name('contact-form');

use App\Http\Controllers\ContactController;

Route::post('/contact/submit', ContactController::class, 'show')->name('contact-form');
