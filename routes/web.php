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
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/Heading', function () {
    return view('Raj.Heading');
});

Route::get('/Contact', function () {
    return view('Raj.contact');
});

Route::get('cnt','App\Http\Controllers\MyFirstController@show');



