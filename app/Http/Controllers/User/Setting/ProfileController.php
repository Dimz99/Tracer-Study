<?php

namespace App\Http\Controllers\User\Setting;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        // dd(Alumni::get());
        $data = Alumni::where('userId', '=', Auth::user()->id)->get();
        $params = [
            'title' => 'Profil | Tracer Study - Universitas Islam Balitar',
            'data' => $data
        ];

        return view('users.profiles.index')->with($params);
    }
}
