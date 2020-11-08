<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QQB\Staff\Services\StaffService;

class StaffController extends Controller
{
    private $service;
    
    public function __construct(StaffService $service) {
        $this->service = $service;
    }

    public function index()
    {
        $staffs = $this->service->getAll();
        return response()->json([
            'success' => true,
            'data' => $staffs
        ]);
    }
}
