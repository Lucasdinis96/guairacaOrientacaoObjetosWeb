<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExemploController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

Route::get('/', [ExemploController::class,'home']);
Route::get('/exemplo',[ExemploController::class,'index']);
Route::get('/contato',[ContactController::class,'index']);
Route::get('/product',[ProductController::class,'index']);
Route::post('/contato-salvar', [ContactController::class, 'storeDataEncrypt'])->name('contato.salvar');