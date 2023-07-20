<?php

namespace App\Http\Controllers\User\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $params = [
            'title' => 'Data Alumni | Tracer Study - Universitas Islam Balitar'
        ];

        return view('users.alumni.index')->with($params);
    }

    public function detail(string $id)
    {
        $params = [
            'title' => 'Data Alumni | Tracer Study - Universitas Islam Balitar'
        ];

        return view('users.alumni.detail')->with($params);
    }
}
