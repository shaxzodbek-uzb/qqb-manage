<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QQB\Tariff\Services\TariffService;

class TariffController extends Controller
{
    private $service;

    public function __construct()
    {
        $this->service = new TariffService;
    }

    public function index()
    {
    	$tariffs = $this->service->allRootTariffsWithChildren();
    	return response()->json([
            'success' => true,
            'data' => $tariffs
        ]);
    }
}
