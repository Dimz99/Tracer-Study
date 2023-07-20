<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $params = [
            'title' => 'Beranda | Tracer Study - Universitas Islam Balitar'
        ];

        return view('users.index')->with($params);
    }
}
