<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController
{
    private $noPayment,
            $tglPayment;
    protected $passwordGanda;
    
    public function __construct($noPayment, $tglPayment, $passwordGanda)
    {
        $this->noPayment = $noPayment;
        $this->tglPayment = $tglPayment;
        $this->passwordGanda = $passwordGanda;
    }
    public function jenisPembayaran(){

    }
    public function menampilkanKeterangan(){
        
    }
}
