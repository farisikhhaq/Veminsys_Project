<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataUserController extends Controller
{
    protected $noid,
        $nama,
        $ttl,
        $alamat;
    private $nosim;

    public function __construct($noid,$nosim, $nama, $ttl, $alamat)
    {
        $this->noid = $noid;
        $this->nama = $nama;
        $this->ttl = $ttl;
        $this->alamat = $alamat;
        $this->nosim = $nosim;
    }

    public function input()
    {
        return view('input');
    }
    public function proses(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:5',
            'umur' => 'required|numeric',
            "alamat" => 'required'
        ]);
        return view('proses', ['data' => $request]);
    }
}
