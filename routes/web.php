<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExemploController;

Route::get('/', [ExemploController::class,'home']);
Route::get('/exemplo',[ExemploController::class,'index']);
