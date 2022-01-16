<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProdukController;

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

Route::get('/products', [ProductController::class, 'get']);
Route::post('product', [ProductController::class, 'post']);
Route::put('/product/{id}', [ProductController::class, 'put']);
Route::delete('/product/{id}', [ProductController::class, 'delete']);

// Route::get('/products', function(){
//     return 
//     response()->json([
//         "message" => "Get Method Success"
//     ]);
// });

Route::post('/produk', [ProdukController::class, 'post']);
Route::get('/produks', [ProdukController::class, 'get']);
Route::get('/produk/{id}',[ProdukController::class, 'getById']);
Route::put('/produk/{id}', [ProdukController::class, 'put']);
Route::delete('/produk/{id}', [ProdukController::class, 'delete']);