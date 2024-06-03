<?php

use App\Http\Controllers\MicelController;
use Illuminate\Support\Facades\Route;

// Route::prefix('backend')->group(function () {
Route::middleware('auth')->prefix('setup')->name('setup.')->group(function () {
    Route::resource('/consultant-type', 'App\Http\Controllers\Backend\ConsultantTypeController');
    Route::resource('/category', 'App\Http\Controllers\Backend\CategoryController');
    Route::resource('/district', 'App\Http\Controllers\Backend\DistrictController');
    Route::resource('/degree', 'App\Http\Controllers\Backend\DegreeController');
    Route::resource('/designation', 'App\Http\Controllers\Backend\DesignationController');
    Route::resource('/chamber', 'App\Http\Controllers\Backend\ChamberController');
});
Route::middleware('auth')->group(function () {
    Route::resource('/doctor', 'App\Http\Controllers\DoctorController');
    Route::resource('/doctor', 'App\Http\Controllers\Backend\DoctorController');
    Route::get('/', [MicelController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
});
// });




