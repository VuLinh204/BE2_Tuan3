<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUser;
use Illuminate\Http\Request ;

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
    return view('form');
})->name('form');

Route::post('/form', function (Request $request) {
})->middleware('checkuser')->name('form.submit');

Route::get('/demo', function () {
    return view('demo');
})->name('demo');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');