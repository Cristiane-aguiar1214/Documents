<?php

use Illuminate\Support\Facades\Route;
use app\Http\controllers\ProdutoController;

Route::get('/produtos/create',[ProdutoController::class,'create'])->name('produtos.create');
Route::get('/produtos',[ProdutoController::class,'index'])->name('produtos.index');
Route::post('/produtos/store',[ProdutoController::class,'store'])->name('produtos.store');




