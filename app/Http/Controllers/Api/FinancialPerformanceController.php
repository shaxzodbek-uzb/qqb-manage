<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QQB\FinancialPerformance\Services\FinancialPerformanceService;

class FinancialPerformanceController extends Controller
{
    private $service;
    public function __construct(FinancialPerformanceService $service) {
        $this->service = $service;
    }
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => $this->service->getAllWithAttributes()
        ]);
    }
}
