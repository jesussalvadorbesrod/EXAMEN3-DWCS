<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])
    ->name('product.index');

Route::get('/producto/crear', [ProductController::class, 'create'])
    ->name('product.create');

Route::post('/producto/guardar', [ProductController::class, 'store'])
    ->name('product.store');

Route::get('/producto/{product}', [ProductController::class, 'show'])
    ->name('product.show');

Route::get('/producto/{product}/editar', [ProductController::class, 'edit'])
    ->name('product.edit');

Route::patch('/producto/{product}', [ProductController::class, 'update'])
    ->name('product.update');

Route::delete('producto/{product}', [ProductController::class, 'destroy'])
    ->name('product.destroy');