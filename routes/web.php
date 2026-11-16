<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeiculoController;

Route::get('/', function () {
    return redirect()->to('/veiculos');
});

Route::resource('veiculos', VeiculoController::class)->except('show');
