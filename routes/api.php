<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/student', function(){
    return 'Api studen here';
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
    // Api Controller 
    // Get Method
Route::get('apidataone', [ApiController::class,'ApiDataone']);
Route::get('apidatatwo/{id}', [ApiController::class,'ApiDatatwo']);
Route::get('apibymodel/{id?}',[ApiController::class,'ApibyModel']);

    // Post Method 
Route::post('postapi',[ApiController::class,'PostApi']);
Route::put('updateapi',[ApiController::class,'UpdateApi']);
Route::delete('deleteapi/{id}',[ApiController::class,'DeleteApi']);
Route::get('searchdataapi/{name}',[ApiController::class,'SearchDataApi']);
Route::post('validationapi',[ApiController::class,'ValidationApi']);