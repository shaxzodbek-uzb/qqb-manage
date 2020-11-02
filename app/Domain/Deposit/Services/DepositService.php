<?php
namespace QQB\Deposit\Services;
use QQB\Deposit\Repositories\DepositTypeRepository;
use QQB\Deposit\Repositories\DepositRepository;

class DepositService
{
    private $typeRepo;
    private $depositRepo;
    
    public function __construct()
    {
        $this->typeRepo = new DepositTypeRepository;
        $this->depositRepo = new DepositRepository;
    }
    public function getDataForPage(): array
    {
        return $this->typeRepo->allTypes();
    }
    public function getAllDeposits(): array
    {
        return $this->depositRepo->getAll();
    }
}