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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/index2', function () {
    return view('index2');
});

Route::get('/description', function () {
    return view('description');
});

Route::get('/installation', function () {
    return view('installation');
});

Route::get('/create_tutorial', function () {
    return view('create_tutorial');
});

Route::get('/conclusion', function () {
    return view('conclusion');
});

Route::get('/credits', function () {
    return view('credits');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/demo', function () {
    return view('demo');
});
