<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Card;

class CardController extends Controller
{
   public function cards()
    {
    	$cards = Card::all();

    	return ['cards' => $cards];
    }
}
