<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cakeworking;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('cakes.dindex');
});

Route::get('/dashboard2', function () {
    return view('cakes.index2');
});

Route::get('/dashboard3', function () {
    return view('cakes.index3');
});

Route::resource('cakes',cakeworking::class);
