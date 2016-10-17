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

Route::get('/books/{title?}', function ($title) {
  if ($title is not null)
    return 'your requested book: '.$title;
  else
    return 'view book library';
  
})->name('books.index');

# Process form to add a new book
Route::post('/books', function() {

})->name('books.store');

Route::get('/books/show/{title}', function($title) {
    return 'Results for the book: '.$title;
});

Route::get('/books/create', function () {
    return 'created book';
})-> name('books.create');

Route::get('/books/destroy', function () {
    return 'deleted book';
})-> name('books.destroy');;


Route::get('/books/show', function () {
    return 'showing book';
})-> name('books.show');;
