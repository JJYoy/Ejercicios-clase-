<?php

use Illuminate\Support\Facades\Route;
use Modules\Recetas\Http\Controllers\RecetasController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('recetas', RecetasController::class)->names('recetas');
});
