<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\TorneoController;

Route::get('/', function () {
    return view('home');
});


Route::resource('registro', RegistroController::class);

Route::resource('torneo', TorneoController::class);