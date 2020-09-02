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

Route::get('/page', function () {
    return view('page');
});

Route::get('/test', function () {
    //echo 'test';
    echo '<pre>';
    print_r(config());
    // echo config('app.locale');
    // echo Config::get('app.locale');
    echo '</pre>';
});
