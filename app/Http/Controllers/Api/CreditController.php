<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Credit;

class CreditController extends Controller
{
    public function credits()
    {
    	$credits = Credit::all();

    	return $credits;
    }
}
