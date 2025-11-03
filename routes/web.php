<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TransactionController;
use App\Models\Transaction;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class);
Route::resource('item', ItemController::class);
Route::resource('transaction', TransactionController::class);
    return view('welcome');
