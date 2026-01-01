<?php

use Illuminate\Support\Facades\Route;
use App\Models\Dish;

Route::get('/', function () {
    return view('pages.home');
});
