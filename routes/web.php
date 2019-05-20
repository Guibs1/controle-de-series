<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', 'SeriesController@index');
