<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use QQB\News\Services\NewsCategoryService;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    private $service;
    public function __construct(NewsCategoryService $service){
        $this->service = $service;
    }
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => $this->service->getAll()
        ]);
    }
    public function show($id)
    {
        return response()->json([
            'success' => true,
            'data' => $this->service->getById($id)
        ]);
    }
}
