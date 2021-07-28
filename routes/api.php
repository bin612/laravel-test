<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//TODO MiddleWare(미들 웨어)
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    });
    Route::get('account', function () {
        return view('account');
    });
});

//TODO 시간당 접속 제한하기
Route::middleware(['throttle:uploads'])->group(function () {
    Route::post('/photos', function () {
       //
    });
});


//TODO 접속 제한 규칙
RateLimiter::for('uploads', function (Request $request) {
    return Limit::perMinute(1000);
 });
 