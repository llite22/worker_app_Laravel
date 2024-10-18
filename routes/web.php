<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workers', [\App\Http\Controllers\WorkerController::class, 'index']);

Route::get('/workers/show', [\App\Http\Controllers\WorkerController::class, 'show']);
