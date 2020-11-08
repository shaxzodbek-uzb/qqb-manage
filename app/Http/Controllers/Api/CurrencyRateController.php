<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use QQB\CurrencyRate\Services\CurrencyRateService;

class CurrencyRateController extends Controller
{

    private $service;

    public function __construct(CurrencyRateService $service) {
        $this->service = $service;
    }
    public function index()
    {
    	$currencies = $this->service->getAll();

    	return response()->json([
            'success' => true,
            'data' => $currencies
        ]);
    }
    public function show($id)
    {
    	$currency = $this->service->getById($id);

    	return response()->json([
            'success' => true,
            'data' => $currency
        ]);
    }
}
