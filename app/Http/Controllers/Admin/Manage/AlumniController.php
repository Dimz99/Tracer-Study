<?php

namespace App\Http\Controllers\Admin\Manage;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\User;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $params = [
            'title' => 'Manage Alumni | Tracer Study - Universitas Islam Balitar',
            'alumni' => Alumni::all()
        ];

        return view('admins.alumnis.index')->with($params);
    }

    public function store(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->username = $request->nim;
        $user->password = bcrypt($request->nim);
        $user->role = 'mahasiswa';

        $user->save();

        $alumni = new Alumni();

        $alumni->userId = $user->id;
        $alumni->nama = $user->name;
        $alumni->nim = $user->username;
        $alumni->thn_masuk = $request->thn_masuk;
        $alumni->prodi = $request->prodi;
        $alumni->fakultas = $request->fakultas;
        $alumni->gender = $request->gender;

        $alumni->save();

        return redirect()->back()->with('alert-success', 'Data alumni berhasil ditambahkan');
    }

    public function detail(string $id)
    {
        $params = [
            'title' => 'Manage Data Alumni | Tracer Study - Universitas Islam Balitar',
        ];

        return view('admins.alumnis.detail')->with($params);
    }
}
