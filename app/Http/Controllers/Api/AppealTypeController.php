<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QQB\Appeal\Services\AppealService;

class AppealTypeController extends Controller
{
    private $service;
    public function __construct(AppealService $service) {
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appealTypes = $this->service->allAppealTypes();
        return response()->json(['success' => true, 'data' => $appealTypes]);
    }
    public function show($slug)
    {
        $appealType = $this->service->getAppealTypeBySlug($slug);
        return response()->json(['success' => true, 'data' => $appealType]);
    }
}
