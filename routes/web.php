<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ContactController::class, 'index'])->name('home');

Route::post('/send',[ContactController::class, 'create'])->name('create');
