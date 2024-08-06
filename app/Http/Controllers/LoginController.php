<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Hiển thị trang đăng nhập
    public function login()
    {
        return view('auth.login');
    }

    // Hiển thị trang đăng ký
    public function register()
    {
        return view('auth.register');
    }

    // Xử lý đăng nhập
    public function postLogin(Request $request) 
    {
        // $request->validate([
        //     'username' => 'required|string',
        //     'password' => 'required|string',
        // ]);

        $data = $request->only('username', 'password');

        if (Auth::attempt($data)) {
            // Đăng nhập thành công
            return redirect()->route('dashboard')->with('success', 'Đăng nhập thành công');
        } else {
            // Đăng nhập thất bại
            return redirect()->back()->with('errorLogin', 'Tên đăng nhập hoặc mật khẩu không chính xác');
        }
    }

    // Xử lý đăng ký
    public function postRegister(Request $request){
    $data = $request->all();

    User::query()->create($data);

    return redirect()->route('login')->with('message', 'Đăng ký tài khoản thành công');
}


    // Xử lý đăng xuất
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('message', 'Đăng xuất thành công');
    }
}
