<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TomController;


Route::resource('toms', TomController::class);
