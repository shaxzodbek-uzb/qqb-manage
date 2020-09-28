<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Deposit;

class DepositController extends Controller
{ 
   public function show($id)
    {
    	$deposit = Deposit::find($id);

    	return $deposit;
    }
}
