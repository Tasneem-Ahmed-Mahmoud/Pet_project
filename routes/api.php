<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SupplierController;
use App\Http\Controllers\Api\GovernorateController;
use App\Http\Controllers\Api\Auth\UserAuthController;
use App\Http\Controllers\Api\Auth\SupplierAuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// ################### User authentication#############################
Route::controller(UserAuthController::class)->prefix('users')->group(function(){
    Route::post('register','register');
    Route::post('/login','login');
    Route::post('logout','logout');
    
});
Route::controller(SupplierAuthController::class)->prefix('suppliers')->group(function(){
    Route::post('register','register');
    Route::post('/login','login');
    Route::post('logout','logout');
    
});

// ###################Governorate#############################
Route::get('governorates',[GovernorateController::class,'index'])->middleware('auth:user');
// ###################Cities#############################
Route::get('cities',[CityController::class,'index']);
Route::get('cities/{governorate_id}',[CityControllerControllerController::class,'governorate_cities']);
// ###################Suppliers#############################
Route::post('suppliers',[ SupplierController::class,'store']);
Route::get('suppliers',[ SupplierController::class,'index']);

  ####################products#################################
  Route::controller(ProductController::class)->prefix('products')->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
});