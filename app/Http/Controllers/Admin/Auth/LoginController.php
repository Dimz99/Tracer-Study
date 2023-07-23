<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $params = [
            'title' => 'Login | Tracer Study - Universitas Islam Balitar'
        ];

        return view('admins.auths.login')->with($params);
    }

    public function doLogin(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $user = User::where([['id',  Auth::user()->id], ['role', 'admin']])->first();
            if (!$user) return redirect()->back()->with('failed', 'Username atau password salah');

            if ($user->role == 'admin') return redirect()->intended('admin/dashboard');

            return redirect()->intended('admin/dashboard');
        }

        return redirect()->back()->with('alert-danger', 'username atau password salah');
    }
}
