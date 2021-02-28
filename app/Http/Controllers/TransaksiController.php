<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    protected $noTransaksi,
        $tglTrasnaksi,
        $buktiPembayaran;
    private $jumlahPembayarantagihan;

    public function __construct($noTransaksi, $tglTrasnaksi, $buktiPembayaran, $jumlahPembayarantagihan)
    {
        $this->noTransaksi = $noTransaksi;
        $this->tglTrasnaksi = $tglTrasnaksi;
        $this->buktiPembayaran = $buktiPembayaran;
        $this->jumlahPembayarantagihan = $jumlahPembayarantagihan;
    }
    public function kirimBukti()
    {
    }
}
