<?php
namespace QQB\Card\Services;

use QQB\Card\Repositories\CardRepository;

class CardService
{
    private $repo;
    public function __construct()
    {
        $this->repo = new CardRepository;
    }
    public function getAll():array
    {
        $cards = $this->repo->getAllCards();
        return $cards;
    }

    public function getDataForPage()
    {
        $cards = $this->repo->getBestCards();
        return $cards;
    }

    public function getById($id): array
    {
        $card = $this->repo->getById($id);
        return $card;
    }
}