<?php

use Illuminate\Support\Facades\Route;
use Modules\Propiedades\Http\Controllers\PropiedadesController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('propiedades', PropiedadesController::class)->names('propiedades');
});
