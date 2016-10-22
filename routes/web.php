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

Route::get('/random', function() {

    $random = new Rych\Random\Random();
    return $random->getRandomString(8);

});

#old way
/*
Route::get('/books', function () {
    return 'Here are all the books';

});
*/

#connect the route to the logic (controller aka resource controller)
Route::get('/books', 'BookController@index');

#do not include html code in routes file
#when initially typing in URL, will use this route
Route::get('/books/create', function () {
    $view = '<form method = "POST" action = "/books/create">';
    $view .= csrf_field(); # This will be explained more later
    $view .=  '<label>Book Title: <input type = "text" name ="book title">';
    $view .=  '<input type = "submit">';
    $view .= '</form>';

    return $view;
});

#once you enter text in form field will be directed to this route
Route::post('/books/create', function () {
    return "Processed.";
});

Route::get('/books/show/{title?}', 'BookController@show')->name('book.show');

/*Route::get('/books/show/{title?}', function($title =''){
  if ($title == ''){
    return 'You did not include a title.';
  }
  return 'You requested the book: ' .$title;
})->name('book.show');
*/
