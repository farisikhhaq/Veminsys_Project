<?php

namespace App\Http\Controllers;

use App\Http\Controllers\iHistoryController;
use App\Http\Controllers\iReminderController;
// use Illuminate\Http\Request;

class PayLaterController implements iHistoryController, iReminderController
{
    protected  $noPay,
        $limitPayLater,
        $infoTagihan;

    public function __construct($noPay,$limitPayLater,$infoTagihan)
    {
        $this->noPay = $noPay;
        $this->limitPayLater = $limitPayLater;
        $this->infoTagihan = $infoTagihan;

    }
    public function cekLimit()
    {
    }
    public function MelakukanPembayaran()
    {
    }
    public function cekTanggalHistory()
    {
    }
    public function tampilRecordHistory()
    {
    }
    public function cekReminder()
    {
    }
    public function ReminderCount()
    {
    }
}
