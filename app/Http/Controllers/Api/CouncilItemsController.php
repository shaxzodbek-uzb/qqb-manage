<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CouncilItems;

class CouncilItemsController extends Controller
{
   	public function councilItems()
    {
    	$councilItems = CouncilItems::all();

    	return ['councilItems' => $councilItems];
    }
}
