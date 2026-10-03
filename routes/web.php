<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'greeting' => 'Hola',
        'person' => request('person', 'Mundo'),
    ]);
});
Route::view('/about', 'about');
Route::view('/contact', 'contact');
