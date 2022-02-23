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
    return view('/layouts/header');
})->name('home');

Route::get('/Select-Car', function() {
    return view('carSelection');
})->name('select-car');

Route::get('/Select-Color', function () {
    return view('colorSelection');
})->name("select-color");

Route::get('/Select-Pack', function () {
    return view('packSelection');
})->name('select-pack');

Route::get('/Summary', function () {
    return view('summary');
})->name('sum');

Route::get('/header', function () {
    return view('/layouts/header');
});


