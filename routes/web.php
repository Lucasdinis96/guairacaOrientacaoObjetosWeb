<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExemploController;
use App\Http\Controllers\ContactController;

Route::get('/', [ExemploController::class,'home']);
Route::get('/exemplo',[ExemploController::class,'index']);
Route::get('/contato',[ContactController::class,'index']);