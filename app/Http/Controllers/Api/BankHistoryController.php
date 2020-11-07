<?php

namespace App\Http\Controllers\Api;

use QQB\BankHistory\Services\BankHistoryService;
use App\Http\Controllers\Controller;

class BankHistoryController extends ApiController
{
    private $service;

    public function __construct(BankHistoryService $service)
    {
        $this->service = $service;
    }
    public function index()
    {
        $histories = $this->service->getAll();

    	return response()->json([
            'success' => true,
            'data' => $histories
        ]);
    }
}
