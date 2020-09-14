<?php
namespace QQB\Card\Repositories;

use Illuminate\Support\Collection;
use App\Card;

class CardRepository
{
    protected $cards;
    public function __construct(Card $cards)
    {
        $this->cards = $cards;
    }
    public function getBestCards():Collection
    {
        return $this->cards->all();
    }
}