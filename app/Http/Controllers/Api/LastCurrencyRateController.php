<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use QQB\CurrencyRate\Services\CurrencyRateService;

class LastCurrencyRateController extends Controller
{
    private $service;

    public function __construct(CurrencyRateService $service) {
        $this->service = $service;
    }
    
    public function index()
    {
        $curreny_rate = $this->service->getLast();
        return response()->json([
            'success' => true,
            'data' => $curreny_rate
        ]);
    }
}