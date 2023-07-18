<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TomController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('toms', TomController::class);
