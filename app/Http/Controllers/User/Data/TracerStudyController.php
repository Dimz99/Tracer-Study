<?php

namespace App\Http\Controllers\User\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TracerStudyController extends Controller
{
    public function index()
    {
        $params = [
            'title' => 'Tracer Study | Tracer Study - Universitas Islam Balitar'
        ];

        return view('users.tracers.index')->with($params);
    }
}
