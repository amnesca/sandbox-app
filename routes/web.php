<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::livewire('/', 'pages::home.index');
Route::livewire('/example', 'pages::example.index');

