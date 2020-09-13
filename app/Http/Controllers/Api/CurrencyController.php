<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Currency;

class CurrencyController extends Controller
{
    public function currency()
    {
    	$currency = Currency::all();

    	return ['currency' => $currency];
    }
}
