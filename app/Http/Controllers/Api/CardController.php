<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Card;
use Lang;

class CardController extends Controller
{
   public function cards()
    {
    	$cards = Card::all();

    	return ['cards' => $cards];
    }


    public function show($id)
    {
    	$card = Card::find($id);

    	$resource_details = $card->resource_details;
    	$documents = $card->documents;
    	$faqs = $card->faqs;
        $locale = \Lang::getLocale();
		// dd($locale);
    	return $card;
    }
}
