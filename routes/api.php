<?php

use Illuminate\Http\Request;

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

Route::post('/login', '\ITreat\Http\Controllers\Auth\LoginController');
Route::get('/code/{code}/authenticate', '\ITreat\Http\Controllers\Api\AuthenticateQRCodeController');
Route::apiresource('/merchants', '\ITreat\Http\Controllers\Api\MerchantController');