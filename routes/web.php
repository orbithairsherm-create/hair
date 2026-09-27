<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::view('/', 'form');

Route::get('/insert', [CustomerController::class, 'insert']);