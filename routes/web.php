<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebController;
use App\Models\Cart;













Route::get('/',[WebController::class, 'web_index']);
Route::get('/homepage/{id}',[WebController::class, 'detail']);



 Route::get("register",[AuthController::class, 'showRegister']);
 Route::post("register",[AuthController::class, 'register']);


 Route::get("login",[AuthController::class, 'showLogin']);
 Route::post("login",[AuthController::class, 'login']);





Route::middleware('checklogin')->group(function(){

    Route::get("/add_product/{id}",[CartController::class, 'addProduct']);
    Route::get("/cart",[CartController::class, 'showCart']);
    Route::get("/delete/{id}",[CartController::class, 'deleteItem']);
    Route::get("/delete_all",[CartController::class, 'deleteAll']);

    


    Route::get("logout",[AuthController::class, 'logout']);
    Route::get("profile",[AuthController::class, 'showProfile']);
    Route::post("profile",[AuthController::class, 'updateProfile']);

});


    Route::resource('/products',ProductController::class)->middleware('checkrole');
    Route::get('/products/edit/add_image/{id}',[ProductController::class, 'add_image'])->middleware('checkrole');
    Route::post('/products/save_media/{id}',[ProductController::class, 'save_media'])->middleware('checkrole');







