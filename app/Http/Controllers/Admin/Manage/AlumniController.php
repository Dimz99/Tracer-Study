<?php

namespace App\Http\Controllers\Admin\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $params = [
            'title' => 'Manage Alumni | Tracer Study - Universitas Islam Balitar',
        ];

        return view('admins.alumnis.index')->with($params);
    }

    public function detail(string $id)
    {
        $params = [
            'title' => 'Manage Data Alumni | Tracer Study - Universitas Islam Balitar',
        ];

        return view('admins.alumnis.detail')->with($params);
    }
}
