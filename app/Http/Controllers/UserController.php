<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $User = User::all();
        return view('CekKendaraan.index', compact('User'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'name' => 'required',
            'email' => 'required',
            'tgl_lahir' => 'required',
            'password' => 'required',
        ]);
        User::create($request->all());
        return redirect()->route('CekKendaraan.index')
            ->with('success', 'Kendaraan Berhasil Ditambahkan');
    }

    public function edit($nosim)
    {
        $User = User::find($nosim);
        return view('CekKendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, $platnomer)
    {
        $request->validate([
            'platnomer' => 'required',
            'no_mesin' => 'required',
            'selinder' => 'required',
            'merk' => 'required',
            'type' => 'required',
            'warna' => 'required',
            'bahan_bakar' => 'required',
            'kilometer' => 'required',
            'tahun' => 'required',
        ]);
        User::find($platnomer)->update($request->all());
        return redirect()->route('CekKendaraan.index')
            ->with('success', 'Kendaraan Berhasil Diupdate');
    }
}
