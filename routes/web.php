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

// Route::get('/away', function () {
//     return "away";
// });

Route::get('/', function () {
    return "HOME";
});

Route::get('/home/{name?}', function ($name = false) {
    if (!$name){
        return "no name";
    }
    return "home of ".$name;
});