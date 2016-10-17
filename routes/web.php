<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/books/create', function () {
    return 'created book';
})-> name('books.show');

Route::get('/books/destroy', function () {
    return 'deleted book';s
});


Route::get('/books/show', function () {
    return 'showing book';
});
