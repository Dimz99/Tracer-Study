<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $params = [
            'title' => 'Login | Tracer Study - Universitas Islam Balitar'
        ];

        return view('users.auth.login')->with($params);
    }

    public function doLogin(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()->intended('user/dashboard');
        }

        return redirect()->back()->with('alert-danger', 'username atau password salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/login')->with('alert-success', 'Berhasil keluar');
    }
}
