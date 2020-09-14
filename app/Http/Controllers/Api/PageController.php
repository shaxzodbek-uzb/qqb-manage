<?php

namespace App\Http\Controllers\Api;

use QQB\Page\Services\PageService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    private $pageService;
    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }
    public function show(string $page)
    {
        $pageData = $this->pageService->dataFor($page);
        return response()->json([
            'success' => true,
            'data' => $pageData
        ]);
    }
    public function index()
    {
    	$pages = Page::all();
    	
    	return ['pages' => $pages];
    }
}
