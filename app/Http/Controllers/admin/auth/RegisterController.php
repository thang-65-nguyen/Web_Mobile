<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Register extends Controller{


// Đăng ký người dùng mới
public function register(Request $request)
{
    // Validate dữ liệu từ form
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|confirmed',
    ]);

    // Mã hóa mật khẩu
    $password = Hash::make($validatedData['password']);

    // Tạo người dùng mới
    $user = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => $password,
    ]);

    // Đăng nhập người dùng sau khi đăng ký (tùy chọn)
    Auth::login($user);

    // Chuyển hướng người dùng tới trang dashboard hoặc một trang khác
    return redirect()->route('dashboard');
}
}
?>