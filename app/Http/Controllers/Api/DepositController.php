<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QQB\Deposit\Services\DepositService;

class DepositController extends Controller
{
    private $service;
    public function __construct() {
        $this->service = new DepositService;
    }
    public function index()
    {
        $deposits = $this->service->getAllDeposits();
    	return response()->json([
            'success' => true,
            'data' => $deposits
        ]);
    }
    public function show($id)
    {
        $deposits = $this->service->getById($id);

        return response()->json([
            'success' => true,
            'data' => $deposits
        ]);
    }
}
