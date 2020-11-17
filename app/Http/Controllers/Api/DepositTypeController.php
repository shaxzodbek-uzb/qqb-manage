<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QQB\Deposit\Services\DepositService;

class DepositTypeController extends Controller
{
    
    private $service;
    public function __construct() {
        $this->service = new DepositService;
    }
    /**
     * Display the specified resource.
     *
     * @param  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $type = $this->service->getTypeBySlug($slug);
    	return response()->json([
            'success' => true,
            'data' => $type
        ]);
    }
}
