<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $params = [
            'title' => 'Beranda Admin | Tracer Study - Universitas Islam Balitar'
        ];

        return view('admins.index')->with($params);
    }
}
