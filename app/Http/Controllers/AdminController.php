<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $noid,
        $nama,
        $ttl,
        $alamat;

    public function __construct($noid, $nama, $ttl, $alamat)
    {
        $this->noid = $noid;
        $this->nama = $nama;
        $this->ttl = $ttl;
        $this->alamat = $alamat;
    }
    public function MenghapusData()
    {
    }
    public function MenyimpanData()
    {
    }
    public function MengubahIsiData()
    {
    }
    public function MengelolaData()
    {
    }
    public function VerifikasiData()
    {
    }
    public function AccData()
    {
    }
    public function MerekapData()
    {
    }
    public function cekData()
    {
    }
}
