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

Route::get('anjubasheer', function () {
    return view('welcome');
});
Route::get('text', function () {
    return view('anju');
});
Route::get('login', function () {
    return view('php');
});
Route::get('facebook', function () {
    return view('facebook');
});
Route::get('bs', function () {
    return view('bs');
});
Route::get('slider', function () {
    return view('slider');
});
Route::get('grid', function () {
    return view('grid');
});
Route::get('web', function () {
    return view('webpage');
});
Route::get('photo', function () {
    return view('photo');
});
Route::get('log', function () {
    return view('login2');
});
Route::get('java', function () {
    return view('javascript');
});
Route::get('pro', function () {
    return view('project');
});