<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\DispatchController;

//デフォルトページをログインページに設定
Route::get('/', function () {
    return redirect('/login');
});


//ログインページの設定
Route::get('/login',[AuthController::class,"showLoginForm"])->name('login');
//ログイン処理ルート
Route::post('/login',[AuthController::class,"login"]);
//ログアウト処理ルート
Route::post('/logout',[AuthController::class,"logout"])->name('logout');

//認証必要ルートの指定
Route::middleware(['auth:sanctum'])->group(function () {
    //Adminルート
    Route::get('/admin',[AdminController::class,'index'])->name('admin');

    //Eventルート
    Route::resource('events',EventController::class);

    //Dispatchルート
    Route::resource('dispatches',DispatchController::class);

    //Workerルート
    Route::resource('workers',WorkerController::class);
});