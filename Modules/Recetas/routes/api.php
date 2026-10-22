<?php

use Illuminate\Support\Facades\Route;
use Modules\Recetas\Http\Controllers\RecetasController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('recetas', RecetasController::class)->names('recetas');
});
