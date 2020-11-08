<?php
namespace QQB\Staff\Services;

use QQB\Staff\Repositories\StaffRepository;

class StaffService
{
    private $repo;
    public function __construct(StaffRepository $repo) {
        $this->repo = $repo;
    }
    public function getAll(): array
    {
        return $this->repo->getAll();
    }
}