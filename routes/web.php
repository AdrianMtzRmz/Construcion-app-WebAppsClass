<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderProductController;
use App\Http\Controllers\EvidencePictureController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
Route::resource('order_products', OrderProductController::class);
Route::resource('evidence_pictures', EvidencePictureController::class);

