<?php

use Illuminate\Support\Facades\Route;
use Modules\Propiedades\Http\Controllers\PropiedadesController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('propiedades', PropiedadesController::class)->names('propiedades');
});
