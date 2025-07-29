<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExemploController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exemplo',[ExemploController::class,'index']);
