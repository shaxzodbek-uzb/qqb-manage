<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use QQB\Menu\Services\MenuService;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    private $menuService;
    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }
    public function index()
    {
        $menusData = $this->menuService->getAll();
        return response()->json([
            'success' => true,
            'data' => $menusData
        ]);
    }
    public function show($menu)
    {
        $menuData = $this->menuService->getBySlug($menu);
        return response()->json([
            'success' => true,
            'data' => $menuData
        ]);
    }
}
