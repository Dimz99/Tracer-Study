<?php

namespace App\Http\Controllers\User\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $params = [
            'title' => 'Profil | Tracer Study - Universitas Islam Balitar'
        ];

        return view('users.profiles.index')->with($params);
    }
}
