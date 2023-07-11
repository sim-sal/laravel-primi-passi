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

    $name = 'Homer';
    $lastname = 'Simpson';

    return view('home', compact('name', 'lastname'));
})->name('home');

Route::get('/about', function () {

    return view('about');
})->name('about');
