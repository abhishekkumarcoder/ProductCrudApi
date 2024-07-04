<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

//store a new product to the database
Route::post('storeProduct',[ProductController::class,'storeProduct']);

//Fetch all available products from the database
Route::get('showProducts',[ProductController::class,'showProducts']);

//Retrieve detailed information about a specific product
Route::get('singleProduct/{id}',[ProductController::class,'showSingleProduct']);

//Update an existing product's details
Route::put('editProduct/{id}',[ProductController::class,'editProduct']);

//Remove a product from the database
Route::delete('deleteProduct/{id}',[ProductController::class,'deleteProduct']);
