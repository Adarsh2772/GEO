<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Livewire\Service;

Route::get('/', function () {
    return view('index');
});


Route::get('/index2', function () {
    return view('index-2');
});

Route::get('/services', function () {
    return view('services');
});

// Route::get('/services', Service::class);

Route::post('/savecontactform', [WebController::class, 'savecontactform']);