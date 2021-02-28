<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepolisianController extends Controller
{
    private $nokta;
    protected $nama,
        $ttl,
        $tgl;

    public function __construct($nokta, $nama, $ttl, $tgl)
    {
        $this->nokta = $nokta;
        $this->nama = $nama;
        $this->ttl = $ttl;
        $this->tgl = $tgl;
    }
    public function MengirimData()
    {
    }
    public function MelihatData()
    {
    }
}
