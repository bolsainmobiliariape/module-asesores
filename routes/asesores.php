<?php

use Illuminate\Support\Facades\Route;
use Bolsainmobiliariape\ModuleAsesores\Http\Controllers\Asesores\IndexController;
use Bolsainmobiliariape\ModuleAsesores\Http\Controllers\Applicants\IndexController as ApplicantIndexController;

use Bolsainmobiliariape\ModuleAsesores\Http\Livewire\Applicants\Show;

Route::as('dashboard.asesores.')->prefix('/dashboard/asesores')->middleware(['web', 'auth'])->group(function () {
	Route::get('/', [IndexController::class, 'index'])->name('index');
	Route::get('/create', [IndexController::class, 'create'])->name('create');
	Route::get('/edit/{asesor}', [IndexController::class, 'edit'])->name('edit');
});

Route::as('dashboard.applicants.')->prefix('/dashboard/applicants')->middleware(['web', 'auth'])->group(function () {
	Route::get('/', [ApplicantIndexController::class, 'index'])->name('index');
	Route::get('/{applicant}', Show::class)->name('show');
});