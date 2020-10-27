<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Card;
use Lang;
use QQB\Card\Services\CardService;

class CardController extends Controller
{
    public function __construct() {
        $this->service = new CardService;
    }
   public function index()
    {
    	$cards = $this->service->getAll();

    	return response()->json([
            'success' => true,
            'data' => $cards
        ]);
    }


    public function show($id)
    {
    	$card = $this->service->getById($id);

    	return response()->json([
            'success' => true,
            'data' => $card
        ]);
    }
}
