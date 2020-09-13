<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Faqs;

class FaqsController extends Controller
{
    public function faqs()
    {
    	$faqs = Faqs::all();

    	return ['faqs' => $faqs];
    }
}
