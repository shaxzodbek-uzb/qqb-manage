<?php
namespace QQB\AnualReport\Services;

use QQB\AnualReport\Repositories\AnualReportRepository;

class AnualReportService {
    private $repo;
    public function __construct(AnualReportRepository $repo) {
        $this->repo = $repo;
    }
    public function getAll(): array
    {
        return $this->repo->getAll();
    }
}