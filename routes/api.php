<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('users', 'App\Http\Controllers\UserController');
Route::apiResource('menus', 'App\Http\Controllers\MenuController');
Route::apiResource('orders', 'App\Http\Controllers\OrderController');
Route::apiResource('order-details', 'App\Http\Controllers\OrderDetailController');
Route::apiResource('categories', 'App\Http\Controllers\CategoryController');

Route::post('/login', 'App\Http\Controllers\UserController@login');
Route::post('/register', 'App\Http\Controllers\UserController@register');
Route::post('/createorder', 'App\Http\Controllers\OrderController@createOrder');
Route::get('/orders/user/{id}', 'App\Http\Controllers\OrderController@getOrdersByUserId');