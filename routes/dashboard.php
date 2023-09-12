<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\SubServiceController;
use App\Http\Controllers\Dashboard\SubCategoryController;
use App\Http\Controllers\Dashboard\Auth\AdminAuthController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\SupplierController;

Route::group(['prefix' => 'dashboard'], function () {

    #################### Admin #################################
    Route::controller(AdminController::class)->prefix('admins')->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
    });
    // authentication routes
    Route::controller(AdminAuthController::class)->prefix('admins')->group(function () {
        Route::post('login', 'login');
        Route::post('logout', 'logout');
    });
    
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


  ####################Suppliers#################################
  Route::controller(SupplierController::class)->prefix('suppliers')->group(function () {
    Route::get('/', 'index');
    Route::get('/verified/{supplier}', 'verified');
});

  ####################products#################################
  Route::controller(ProductController::class)->prefix('products')->group(function () {
    Route::get('/', 'index');
    Route::get('/approved/{product}', 'approved');
});



});