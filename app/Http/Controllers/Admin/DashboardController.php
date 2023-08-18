<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $count_alumni = Alumni::count();

        $thn_17 = Alumni::where('thn_keluar', '=', '2017')->count();
        $thn_18 = Alumni::where('thn_keluar', '=', '2018')->count();

        $params = [
            'title' => 'Beranda Admin | Tracer Study - Universitas Islam Balitar',
            'total_alumni' => $count_alumni,
            'count_2017' => $thn_17,
            'count_2018' => $thn_18,
        ];

        return view('admins.index')->with($params);
    }
}
