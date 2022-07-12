<?php


// PagesController
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/welcome', 'PagesController@welcome');


// MoviesController
// Route::get('/movie', 'MoviesController@index');
// Route::post('/movie', 'MoviesController@store');
// Route::get('/movie/create', 'MoviesController@create');
// Route::get('/movie/{movie}', 'MoviesController@show');
// Route::delete('/movie/{movie}', 'MoviesController@destroy');
// Route::get('/movie/{movie}/edit', 'MoviesController@edit');
// Route::put('/movie/{movie}', 'MoviesController@update');

Route::resource('movie', 'MoviesController');


?>
