<?php

use Illuminate\Support\Facades\Route;

Route::as('dashboard.asesores.')->prefix('/dashboard/asesores')->middleware(['web', 'auth'])->group(function () {
	Route::get('/', [IndexController::class, 'index'])->name('index');
	Route::get('/create', [IndexController::class, 'create'])->name('create');
	Route::get('/edit/{asesor}', [IndexController::class, 'edit'])->name('edit');
});