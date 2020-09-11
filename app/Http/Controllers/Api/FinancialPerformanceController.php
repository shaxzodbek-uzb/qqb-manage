<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FinancialPerformance;

class FinancialPerformanceController extends Controller
{
    public function financial_performances()
    {
    	$financial_performances = FinancialPerformance::all();
    	
    	return ['financial_performances' => $financial_performances];
    }
}
