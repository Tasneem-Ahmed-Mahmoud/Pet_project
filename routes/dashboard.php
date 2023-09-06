<?php
use App\Http\Controllers\Dashboard\SubServiceController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\SubCategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::group(['prefix' => 'dashboard'], function () {
   

     #################### Service#################################
     Route::controller(ServiceController::class)->prefix('services')->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
    });
     #################### SubService#################################
     Route::controller(SubServiceController::class)->prefix('sub-services')->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
    });

    
     #################### category#################################
     Route::controller(categoryController::class)->prefix('categories')->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
    });
     #################### SubCategory#################################
     Route::controller(SubCategoryController::class)->prefix('sub-categories')->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
    });
});