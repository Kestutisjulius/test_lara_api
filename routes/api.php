<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController as Category;
use App\Http\Controllers\Api\ProductController as Product;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::get('categories', [Category::class, 'index']);
//Route::get('categories/{category}', [Category::class, 'show']);
//Route::post('categories', [Category::class, 'store']);
//Route::put('categories/{category}', [Category::class, 'update']);
//Route::delete('categories/{category}', [Category::class, 'destroy']);

Route::apiResource('categories', 'App\Http\Controllers\Api\CategoryController');

Route::get('products', [Product::class, 'index']);
Route::get('product/{product}', [Product::class, 'show']);
