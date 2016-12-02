<?php


//Route::group(['middleware' => ['auth']], function() {
    Route::get('/', 'JobController@index');
    Route::resource('job','JobController');
//});

Route::auth();