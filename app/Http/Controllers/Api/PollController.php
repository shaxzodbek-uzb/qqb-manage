<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QQB\Poll\Services\PollService;

class PollController extends Controller
{
    public function __construct(PollService $service) {
        $this->service = $service;
    }
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => $this->service->getAll()
        ]);
    }
    public function update(Request $request)
    {
        return response()->json([
            'success' => true,
            "data" => $this->service->update($request)
        ]);
    }
}
