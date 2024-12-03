<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Hiển thị form đăng nhập
    public function login()
    {
        return view('auth.login');
    }

    // Xử lý đăng nhập
    public function postLogin(Request $request)
    {
        $data = $request->validate([
            'username'    => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($data)) {
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.user.index');
            }
            return redirect()->route('user.profile');
        }

        return back()->withErrors(['email' => "Thông tin đăng nhập không chính xác"])->withInput();
    }

    // Hiển thị form đăng ký
    public function register()
    {
        return view('auth.register');
    }

    // Xử lý đăng ký
    public function postRegister(Request $request)
    {
        $data = $request->validate([
            'fullname'         => ['required', 'min:5'],
            'username'         => ['required', 'min:5', 'unique:users,username'],
            'email'            => ['required', 'email', 'unique:users,email'],
            'password'         => ['required', 'min:6'],
            'password_confirm' => ['required', 'same:password'],
            'avatar'           => ['nullable', 'image', 'max:2048'],
        ]);

        // Xử lý avatar
        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        // Mã hóa mật khẩu
        $data['password'] = Hash::make($data['password']);

        User::query()->create($data);

        return redirect()->route('login')->with('message', 'Đăng ký thành công');
    }

    // Xử lý đăng xuất
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
