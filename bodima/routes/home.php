<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/acc', function () {
    return view('acc');
})->name('acc');

Route::get('/members', function () {
    return view('member');
})->name('members');