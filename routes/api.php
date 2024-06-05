<?php

use App\Http\Resources\DistrictCollection;
use App\Models\Backend\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//routes without authentication
Route::get('/districts',function(){
    return new DistrictCollection(District::where('status','Active')->get());
});
