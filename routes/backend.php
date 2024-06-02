<?php

use App\Http\Controllers\MicelController;
use Illuminate\Support\Facades\Route;

Route::prefix('backend')->group(function () {
    Route::middleware('auth')->prefix('setup')->name('setup.')->group(function () {
        Route::resource('/consultant-type', 'App\Http\Controllers\Backend\ConsultantTypeController');
        Route::resource('/category', 'App\Http\Controllers\Backend\CategoryController');
        Route::resource('/district', 'App\Http\Controllers\Backend\DistrictController');
    });
    Route::get('/dashboard',[MicelController::class,'dashboard'])->middleware(['auth'])->name('dashboard');
});

Route::middleware('auth')->prefix('setup')->name('setup.')->group(function () {
	Route::resource('/chamber','App\Http\Controllers\ChamberController');
Route::resource('/chamber','App\Http\Controllers\Backend\ChamberController');
});
