<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DessertController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/desserts', [DessertController::class, 'index']);
