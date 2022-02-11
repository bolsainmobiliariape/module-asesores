<?php

use Illuminate\Support\Facades\Route;
use Bolsainmobiliariape\ModuleAsesores\Http\Controllers\Asesores\IndexController;

Route::as('dashboard.asesores.')->prefix('/dashboard/asesores')->middleware(['web', 'auth'])->group(function () {
	Route::get('/', [IndexController::class, 'index'])->name('index');
	Route::get('/create', [IndexController::class, 'create'])->name('create');
	Route::get('/edit/{asesor}', [IndexController::class, 'edit'])->name('edit');
});