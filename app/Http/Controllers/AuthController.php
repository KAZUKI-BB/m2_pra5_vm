<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // ログイン画面ルート設定
    public function showLoginForm(){
        return view('auth.login');
    }

    // ログイン処理とセッションの生成
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }else{
            return back()->withErrors([
                'login' => 'ログイン情報が間違っています。'
            ]);
        }
    }

    // ログアウト処理
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
