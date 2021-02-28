<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryKendaraanController extends Controller
{
    private $lakaKecelakaan,
            $pelanggaranBerat,
            $tglKejadian,
            $tkpKejadian;

    public function __construct($lakaKecelakaan, $pelanggaranBerat, $tglKejadian, $tkpKejadian)
    {
        $this->lakaKecelakaan = $lakaKecelakaan;
        $this->pelanggaranBerat = $pelanggaranBerat;
        $this->tglKejadian = $tglKejadian;
        $this->tkpKejadian = $tkpKejadian;
    }
    public function Mengupdate(){

    }
    public function Menerima(){

    }
    public function Mengkalkulasi(){

    }
    public function Menambah(){

    }
    public function MembuatList(){
        
    }
}
