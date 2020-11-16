<?php
namespace QQB\FinancialPerformance\Services;
use QQB\FinancialPerformance\Repositories\FinancialPerformanceRepository;

class FinancialPerformanceService {
    
    private $repo;

    public function __construct(FinancialPerformanceRepository $repo) {
        $this->repo = $repo;
    }
    public function getAllWithAttributes(): array
    {
        return $this->repo->getAllWithAttributes();
    }
}