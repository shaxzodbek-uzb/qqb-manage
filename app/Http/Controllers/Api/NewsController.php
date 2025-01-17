<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QQB\News\Services\NewsService;

class NewsController extends Controller
{
    private $service;

    public function __construct(NewsService $service) {
        $this->service = $service;
    }
    
    public function index()
    {
        $news = $this->service->getAll();
        return response()->json([
            'success' => true,
            'data' => $news
        ]);
    }
    
    public function show($id)
    {
    	$news = $this->service->getById($id);
        return response()->json([
            'success' => true,
            'data' => $news
        ]);
    }
}
