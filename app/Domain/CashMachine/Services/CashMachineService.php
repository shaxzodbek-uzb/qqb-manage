<?php
namespace QQB\CashMachine\Services;
use QQB\CashMachine\Repositories\CashMachineRepository;

class CashMachineService
{
    protected $repo;
    public function __construct(CashMachineRepository $repo) {
        $this->repo = $repo;
    }
    public function getAll(): array
    {
        return $this->repo->getAll();
    }
}