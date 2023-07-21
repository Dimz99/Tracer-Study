<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $params = [
            'title' => 'Login | Tracer Study - Universitas Islam Balitar'
        ];

        return view('admins.auths.login')->with($params);
    }
}
