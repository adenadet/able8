<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Api\Shop')->name('api.shop.')->prefix('/shop')->group(base_path('routes/api/shop.php'));

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
