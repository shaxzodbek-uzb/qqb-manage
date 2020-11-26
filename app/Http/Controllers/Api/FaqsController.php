<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Faqs;
use QQB\Faqs\Resources\FaqsResource;

class FaqsController extends Controller
{
    public function index()
    {
    	$faqs = Faqs::where('main', true)->orderByDesc('id')->get();
    	return response()->json([
            'success' => true,
            'faqs' => FaqsResource::collection($faqs)
        ]);
    }
}
