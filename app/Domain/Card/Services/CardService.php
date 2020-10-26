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
    public function getDataForPage()
    {
        $cards = $this->repo->getAllCards();
        return $cards;
    }
}