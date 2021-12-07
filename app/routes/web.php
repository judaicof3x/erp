<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'verified'])
    ->name('painel.')
    ->prefix('')
    ->group(function () {

        // Pages
        Route::get('', [App\Http\Controllers\PagesController::class, 'home'])->name('home');

        // Clientes
        Route::group(['as' => 'clientes.', 'prefix' => 'clientes'], function() {
            Route::get('', [App\Http\Controllers\Comercial\ClientsController::class, 'index'])->name('index');
            Route::get('/cadastrar', [App\Http\Controllers\Comercial\ClientsController::class, 'create'])->name('create');
            Route::post('/cadastrar', [App\Http\Controllers\Comercial\ClientsController::class, 'store'])->name('store');
            Route::get('/visualizar/ID-454{id}', [App\Http\Controllers\Comercial\ClientsController::class, 'show'])->name('show');
            Route::put('/visualizar/ID-454{id}', [App\Http\Controllers\Comercial\ClientsController::class, 'update'])->name('update');
            Route::delete('/deletar/ID-454{id}', [App\Http\Controllers\Comercial\ClientsController::class, 'destroy'])->name('destroy');
        });

        // Serviços
        Route::group(['as' => 'servicos.', 'prefix' => 'servicos'], function() {
            Route::get('', [App\Http\Controllers\Produtos\ServicesController::class, 'index'])->name('index');
            Route::get('/cadastrar', [App\Http\Controllers\Produtos\ServicesController::class, 'create'])->name('create');
            Route::post('/cadastrar', [App\Http\Controllers\Produtos\ServicesController::class, 'store'])->name('store');
            Route::get('/visualizar/{url}', [App\Http\Controllers\Produtos\ServicesController::class, 'show'])->name('show');
            Route::put('/visualizar/{url}', [App\Http\Controllers\Produtos\ServicesController::class, 'update'])->name('update');
            Route::delete('/deletar/{url}', [App\Http\Controllers\Produtos\ServicesController::class, 'destroy'])->name('destroy');
        });

        // Categorias
        Route::group(['as' => 'categorias.', 'prefix' => 'categorias'], function() {
            Route::get('', [App\Http\Controllers\Produtos\CategoriesController::class, 'index'])->name('index');
            Route::get('/cadastrar', [App\Http\Controllers\Produtos\CategoriesController::class, 'create'])->name('create');
            Route::post('/cadastrar', [App\Http\Controllers\Produtos\CategoriesController::class, 'store'])->name('store');
            Route::get('/visualizar/{url}', [App\Http\Controllers\Produtos\CategoriesController::class, 'show'])->name('show');
            Route::put('/visualizar/{url}', [App\Http\Controllers\Produtos\CategoriesController::class, 'update'])->name('update');
            Route::delete('/deletar/{url}', [App\Http\Controllers\Produtos\CategoriesController::class, 'destroy'])->name('destroy');
        });
});
