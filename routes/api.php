<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\APIResource;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FileController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("getdata",[APIController::class,'getdata']);
Route::post("add_data",[APIController::class,'add_data']);
Route::put("update_data",[APIController::class,'update_data']);
Route::delete("delete_data/{id}",[APIController::class,'delete_data']);
Route::get("search/{name}",[APIController::class,'search']);
// Route::apiResource('apiresponse',APIResource::class);
Route::post('apiresponsestore',[APIResource::class,'store']);

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
Route::apiResource('apiresponse',APIResource::class);
    });
Route::post("login",[UserController::class,'index']);

Route::post("upload",[FileController::class,'upload']);