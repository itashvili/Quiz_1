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
    return 'hello world';
});

Route::get('name', function () {
    return 'lika';
});

Route::get('surname', function () {
    return 'itashvili';
});

Route::get('city', function () {
    return 'Tbilisi';
});

Route::get('course', function () {
    return 'php';
});

Route::post('save', function () {
    return response()->json([
        "msg" => "saved!"
    ]);
});