<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $params = [
            'title' => 'Profil Admin | Tracer Study - Universitas Islam Balitar'
        ];

        return view('admins.profiles.index')->with($params);
    }
}
