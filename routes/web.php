<?php

use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\resultController;



Route::post('/', [welcomeController::class, 'formulario']);

Route::post('/result', [resultController::class, 'resultado']);