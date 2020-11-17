<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use QQB\Branche\Services\BrancheService;

class BrancheController extends ApiController
{
    
    public function __construct(BrancheService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
    	return response()->json([
            'success' => true,
            'data' => $this->service->getAll(request()->get('cash_machine', false))
        ]);
    }
}
