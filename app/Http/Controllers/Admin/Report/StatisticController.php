<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function index()
    {
        $params = [
            'title' => 'Laporan Statistik Alumni | Tracer Study - Universitas Islam Balitar',
        ];

        return view('admins.reports.statistic')->with($params);
    }
}
