<?php

namespace App\Http\Controllers\Api;

use App\Credit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QQB\Credits\Services\CreditService;

class CreditController extends Controller
{
    private $service;

    public function __construct()
    {
        $this->service = new CreditService;
    }
    public function index()
    {
    	$credits = $this->service->getAll(request()->get('slug'));
    	
    	return response()->json([
            'success' => true,
            'data' => $credits
        ]);
    }

    public function show($id)
    {
    	$credit = $this->service->getById($id);
    	
    	return response()->json([
            'success' => true,
            'data' => $credit
        ]);
    }
}
