<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    echo 'wenasa hotel';
});

Route::get('/about','App\http\controllers\PagesController@indexaboutus');

Route::get('/contact','App\http\controllers\PagesController@indexconatctus');

