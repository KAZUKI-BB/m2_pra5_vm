<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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

Route::middleware(['auth'])->group(function () {
    //Adminの設定
    Route::get('/admin', [AdminController::class, 'showAdmin'])->name('admin.menu');
});