<?php

use App\Http\Controllers\FormController;
use App\Modules\Pages\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('pages.index');
Route::get('form', [FormController::class, 'form']);
Route::post('form', [FormController::class, 'submit'])->name('form.submit');
Route::get('/{slug}', [PageController::class, 'show'])->name('pages.show');
