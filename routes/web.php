<?php

use Illuminate\Support\Facades\Route;
use App\Models\Dish;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/recipes', function () {
    return view('recipes.index');
})->name('recipesIndex');

Route::get('/users', function () {
    return view('users.index');
})->name('usersIndex');
