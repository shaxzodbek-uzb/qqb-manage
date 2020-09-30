<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BankHistory;

class BankHistoryController extends ApiController
{
    public function history()
    {
    	$history = BankHistory::all();
        return ['history' => $history];
    }
}
