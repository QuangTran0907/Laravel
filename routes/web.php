<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AppController;





// Route:: get("products",[
//     ProductController::class,"index"
// ])->name('products');

// Route:: get("products/{id}",[
//     ProductController::class,"detail"
    
// ])->where('id','[0-9a-zA-Z]+');



// Route::get('/',[PagesController::class, 'index']);
// Route::get('/about',[PagesController::class, 'about']);
// Route::get('/postIndex',[PostController::class, 'index']);


Route::resource('/products',ProductController::class);
Route::get('products/edit/add_image/{id}',[ProductController::class, 'add_image']);
Route::post('products/save_media/{id}',[ProductController::class, 'save_media']);





Route::get('/homepage',[AppController::class, 'web_index']);



// Route::get("/users",function(){
//     return  "This is user page ";
// });

// Route::get("/getlist",function(){
//     return ["ao","quan","giay","dep"];
// });

// Route::get("/getobj",function(){
//     return response()->json([
//         'name' => 'tran huu quang',
//         'email' => 'quang@gmail.com'
//     ]);
// });

// Route::get("/redirect",function(){
//     return redirect('/getobj');
// });

