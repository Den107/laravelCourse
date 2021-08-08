<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsController;
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
});

Route::get('/category', function () {
    return view('categories');
});

Route::get('/news', [NewsController::class, 'index'], function () {
    return view('news');
});

Route::get('/oneNews/{id}', [NewsController::class, 'show'], function () {
    return view('oneNews');
});
