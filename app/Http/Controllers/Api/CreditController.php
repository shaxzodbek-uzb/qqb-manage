<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Credit;

class CreditController extends Controller
{
    public function credits()
    {
    	$credits = Credit::all();

    	return $credits;
    }

    public function show($id)
    {
    	$credit = Credit::find($id);

    	$resource_details = $credit->resource_details;
    	$documents = $credit->documents;
    	$faqs = $credit->faqs;
		//dd($credit->documents);
    	return $credit;
    }
}
