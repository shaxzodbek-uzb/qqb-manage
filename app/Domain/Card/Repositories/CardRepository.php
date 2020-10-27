<?php
namespace QQB\Card\Repositories;

use QQB\Card\Resources\CardResource;
use Illuminate\Support\Collection;
use App\Card;

class CardRepository
{

    protected $cards;
    public function __construct()
    {
        $this->cards = new Card;
    }
    public function getBestCards(): array
    {
        $cards = $this->cards->all();
        return ['cards' => CardResource::collection($cards)];
    }
    public function getAllCards(): array
    {
        $cards = $this->cards->get();
        return ['cards' => CardResource::collection($cards)];
    }
    public function getById($id):array
    {
        $card = $this->cards->with('resource_details','advantages', 'documents', 'faqs')->find($id);
        return ['card' => new CardResource($card)];
    }
}