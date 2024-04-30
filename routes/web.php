<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/index2', function () {
    return view('index-2');
});

Route::post('/savecontactform', [WebController::class, 'savecontactform']);