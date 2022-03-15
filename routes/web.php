<?php

    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */
    Route::redirect('/', 'admin/dashboard');
    Route::prefix('admin')->group(function () {
        Route::view('/dashboard', 'admin.dashboard.index');
        Route::view('/category', 'admin.category.index');
        Route::view('/pos', 'admin.pos.index');
        Route::view('/pos/order-list', 'admin.pos.order_list');
        Route::view('/attributes', 'admin.attributes.index');
    });

