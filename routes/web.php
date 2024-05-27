<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/merhaba', function () {
    return redirect('/hello');
});

Route::get('/greetings/{name}', function ($name) {
    return 'Greetings ' . $name;
});
