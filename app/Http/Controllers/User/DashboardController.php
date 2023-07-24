<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $count_alumni= Alumni::count();
        $params = [
            'title' => 'Beranda | Tracer Study - Universitas Islam Balitar',
            'total_alumni' => $count_alumni
        ];

        return view('users.index')->with($params);
    }
}
