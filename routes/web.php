<?php

use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\resultController;



Route::get('/', [welcomeController::class, 'formulario']);

Route::get('/result', [resultController::class, 'resultado']);