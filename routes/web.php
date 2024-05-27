<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
})->name('hello');

Route::get('/merhaba', function () {
    return redirect()->route('hello');
});

Route::get('/greetings/{name}', function ($name) {
    return 'Greetings ' . $name;
});
