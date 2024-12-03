<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function editProfile()
    {
        $user = Auth::user();
        return view('user.edit_profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'unique:users,email,' . Auth::id()],
            'fullname' => ['required', 'string'],
            'username' => ['required', 'string', 'unique:users,username,' . Auth::id()],
            'avatar' => ['nullable', 'image', 'max:2048']
        ]);

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        $user = User::find(Auth::id());
        if ($user) {
            $user->update($data);
        }

        return redirect()->route('user.profile')->with('message', 'Cập nhật thông tin thành công.');
    }

    public function editPassword()
    {
        return view('user.edit_password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'min:6'],
            'new_password' => ['required', 'min:6', 'different:current_password'],
            'new_password_confirmation' => ['required', 'same:new_password'],
        ]);

        $user = User::find(Auth::id());

        if ($user && Hash::check($request->current_password, $user->password)) {
            $user->update(['password' => bcrypt($request->new_password)]);
            return redirect()->route('user.profile')->with('message', 'Cập nhật mật khẩu thành công.');
        }

        return back()->withErrors(['current_password' => 'Mật khẩu hiện tại không chính xác.']);
    }
}
