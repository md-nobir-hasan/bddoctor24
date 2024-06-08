<?php

use App\Http\Controllers\Api\FetchDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//routes without authentication
Route::get('/districts',[FetchDataController::class,'district']);
Route::get('/categories',[FetchDataController::class,'category']);
Route::get('/chambers',[FetchDataController::class,'chamber']);
Route::get('/consultant-types',[FetchDataController::class,'consultantType']);
Route::get('/degrees',[FetchDataController::class,'Degree']);
Route::get('/designations',[FetchDataController::class,'Designation']);
Route::get('/doctors',[FetchDataController::class,'Doctor']);
Route::get('/doctors/search',[FetchDataController::class,'DoctorSearch']);
