<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    Route::get('/employees', [EmployeeController::class, 'index']);
});
