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

Route::get('/{a},{b}', function ($a, $b) {

    return view('welcome', $a, $b);
});


Route::get('/premier', function () {
    return "Bonjour chers utilisateurs";
});

Route::get("dynamique/{name}", function ($name) {
    return "hello $name";
});

Route::get("/about", function () {
    $name = "Alexis";
    $lastname = "Van San";
    return view('about', compact('name', 'lastname'));
});