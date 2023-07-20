<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $params = [
            'title' => 'Login | Tracer Study - Universitas Islam Balitar'
        ];

        return view('users.auth.login')->with($params);
    }
}
