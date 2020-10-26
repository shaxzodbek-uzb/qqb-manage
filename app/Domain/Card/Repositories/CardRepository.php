<?php
namespace QQB\Card\Repositories;

use QQB\Card\Resources\CardResource;
use Illuminate\Support\Collection;
use App\Card;

class CardRepository
{

    protected $cards;
    public function __construct(Card $cards)
    {
        $this->cards = $cards;
    }
    public function getBestCards(): array
    {
        $cards = $this->cards->all();
        return ['cards' => CardResource::collection($cards)];
    }
    public function getAllCards(): array
    {
        $cards = $this->cards->with('resource_details','advantages', 'documents')->get();
        return ['cards' => CardResource::collection($cards)];
    }
}