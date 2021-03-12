<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public $noid;
    private $nosim;
    protected $nama, $umur, $alamat;
    
    public function __construct($noid, $nosim, $nama, $umur, $alamat)
    {
        $this->noid     = $noid;
        $this->nosim    = $nosim;
        $this->nama     = $nama;
        $this->umur     = $umur;
        $this->alamat   = $alamat;
    }

    public function mengisiData($nama,$umur,$alamat){
        

    }
    public function melihatData(){

    }
    public function mengupdateData($nama,$umur,$alamat){

    }
    public function setNoSim($nosim){
         $this->nosim = $nosim; 

    }
    public function getNoSim(){
        return $this->nosim;
    }
    public function store(Request $request){
        dd($request->all());
    }

    
}
