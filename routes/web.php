<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Models\Greeting;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//        return "hello world";
//});

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('products', function () {
    return view('products');
});

Route::get('services', function () {
    return view('services');
});

Route::post('/', function () {
    //POST 요청에 대한 처리를 담당하는 라우트
});

Route::put('/', function () {
    //PUT 요청에 대한 처리를 담당하는 라우트0
});

Route::delete('/', function () {
    //DELETE 요청에 대한 처리를 담당하는 라우트
});

Route::any('/', function () {
    // 요청 메서드에 관계없이 해당 요청을 처리하는 라우트
});

Route::match(['get', 'post'],'/', function () {
    // GET 또는 POST인 요청에 대해서만 처리하는 라우트
});

Route::get('user/{id}/friends', function ($id) {
    // 라우트 파라미터
});

Route::get('user/{id?}', function ($id = 'fallbackId') {
    // 라우트 파라미터
});


//TODO 라우트 파라미터의 정규 표현식 조건 추가
Route::get('users/{id}', function ($id) {
    //
})->where('id', '[0-9]+');

Route::get('users/{username}', function ($username) {

})->where('username', '[A-Za-z]+');
