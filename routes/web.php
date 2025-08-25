<?php

use App\Http\Controllers\UsercontactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Routes pour le formulaire de contact (nommées 'contacter')
Route::get('/contacter', [UsercontactController::class, 'create'])->name('contacter.create');
Route::post('/contacter', [UsercontactController::class, 'store'])->name('contacter.store');

