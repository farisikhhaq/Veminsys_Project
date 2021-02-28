<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekKendaraanController extends Controller
{
    protected $platNomer,
              $noMesin;
    public $selinder,
            $merk,
            $type,
            $warna,
            $bahanBakar,
            $kiloMeter,
            $tahun;

    public function __construct($platNomer, $noMesin,$selinder,$merk,$type,$warna,$bahanBakar,$kiloMeter,$tahun)
    {
        $this->platNomer = $platNomer;
        $this->noMesin = $noMesin;
        $this->merk = $merk;
        $this->type = $type;
        $this->warna = $warna;
        $this->bahanBakar = $bahanBakar;
        $this->kiloMeter = $kiloMeter;
        $this->tahun = $tahun;
    }
    public function MengecekDataMobil(){

    }
    public function Penguploadan(){

    }
    public function MenampilkanData(){

    }
    public function UploadData(){

    }
    public function SearchData(){

    }
}
