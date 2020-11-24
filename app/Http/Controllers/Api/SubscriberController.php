<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QQB\Subscriber\Services\SubscriberService;

class SubscriberController extends Controller
{
    private $service;

    public function __construct(SubscriberService $service) {
        $this->service = $service;
    }
    public function store(Request $request)
    {
        $subscribers = $this->service->store($request);
        
        return response()->json([
            'success' => true,
            'data' => $subscribers
        ]);
    }
}
