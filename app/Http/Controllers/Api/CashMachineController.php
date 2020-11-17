<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QQB\CashMachine\Services\CashMachineService;

class CashMachineController extends Controller
{
    private $service;
    public function __construct(CashMachineService $service)
    {
        $this->service = $service;
    }
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => $this->service->getAll()
        ]);
    }
}
