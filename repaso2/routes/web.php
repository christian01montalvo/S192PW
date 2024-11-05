<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'bienvenido')-> name('bienvenido');
Route::view('/reg', 'registro')-> name('registro');

