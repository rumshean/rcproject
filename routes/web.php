<?php

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

Auth::routes();

Storage::disk('local')->put('file.txt', 'Contents');

// Route::get('/home', 'bnicontroller@index');
Route::resource('/home', 'bnicontroller')->only([
    'index', 'show', 'create', 'store'
]);

// Route::get('/bni','bnicontroller@index');
