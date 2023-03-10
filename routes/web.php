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
    $welcome = "welcome";
    return view('welcome', compact("welcome"));
});

/* Route::get('/', function () {
    $welcome = [   
        "name" => "Yuri Punzo II"
    ];
    return view('welcome', $welcome);
}); */

Route::get('/about', function () {
    $info = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ipsam expedita assumenda!";
    return view('about', compact("info"));
});
