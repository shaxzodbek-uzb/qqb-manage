<?php
namespace QQB\BankHistory\Services;

use QQB\BankHistory\Repositories\BankHistoryRepository;

class BankHistoryService
{
    private $repo;
    public function __construct(BankHistoryRepository $repo)
    {
        $this->repo = $repo;
    }

    public function getAll():array
    {
        $cards = $this->repo->allHistories();
        return $cards;
    }
}