<?php

use Illuminate\Support\Facades\Route;

Route::prefix('backend')->group(function(){
 Route::middleware('auth')->prefix('setup')->name('setup.')->group(function () {
	Route::resource('/consultant-type','App\Http\Controllers\ConsultantTypeController');
Route::resource('/consultant-type','App\Http\Controllers\Backend\ConsultantTypeController');
Route::resource('/category','App\Http\Controllers\CategoryController');
Route::resource('/category','App\Http\Controllers\Backend\CategoryController');
Route::resource('/district','App\Http\Controllers\DistrictController');
Route::resource('/district','App\Http\Controllers\Backend\DistrictController');
});
 
 });
