<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('expenses', ExpenseController::class);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/expenses', [ExpenseController::class, 'index']);
