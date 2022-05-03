<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    echo 'wenasa hotel';
});

Route::get('/about',[PagesController::class, 'indexaboutus']);
Route::get('/contact',[PagesController::class, 'indexcontactus']);

