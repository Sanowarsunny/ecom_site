<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//pages
Route::get('/', [HomeController::class, 'HomePage']);
