<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecadoController;

Route::get('/', [RecadoController::class, 'index']);

Route::post('/', [RecadoController::class, 'store']);
