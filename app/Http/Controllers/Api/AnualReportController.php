<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use QQB\AnualReport\Services\AnualReportService;

class AnualReportController extends Controller
{
    public function __construct(AnualReportService $service) {
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
