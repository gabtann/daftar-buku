<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::redirect('/', '/buku');

Route::resource('buku', BukuController::class);
