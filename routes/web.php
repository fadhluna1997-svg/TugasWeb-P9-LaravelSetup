<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return redirect('/hello');
});

Route::get('/hello/{nama?}', [PageController::class, 'hello']);

Route::get('/contact', [PageController::class, 'contact']);

Route::get('/students', [PageController::class, 'students']);