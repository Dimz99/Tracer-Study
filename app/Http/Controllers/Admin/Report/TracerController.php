<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TracerController extends Controller
{
    public function index()
    {
        $params = [
            'title' => 'Laporan Tracer Study | Tracer Study - Universitas Islam Balitar',
        ];

        return view('admins.reports.tracer')->with($params);
    }

    public function detail(string $id)
    {
        $params = [
            'title' => 'Detail Laporan Tracer Study | Tracer Study - Universitas Islam Balitar',
        ];

        return view('admins.reports.tracerDetail')->with($params);
    }
}
