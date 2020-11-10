<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppealStore;
use QQB\Appeal\Services\AppealService;

class AppealController extends Controller
{
    
    private $service;

    public function __construct(AppealService $service) {
        $this->service = $service;
    }

    public function store(AppealStore $request)
    {
        $appeal = $this->service->store($request);
        return response()->json([
            'success' => true,
            'data' => $appeal
        ]);
    }
}
