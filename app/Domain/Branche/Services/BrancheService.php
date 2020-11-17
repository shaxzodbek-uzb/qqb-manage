<?php
namespace QQB\Branche\Services;

use QQB\Branche\Repositories\BrancheRepository;

class BrancheService {

    private $repo;

    public function __construct(BrancheRepository $repo) {
        $this->repo = $repo;
    }

    public function getAll($cash_machine = false): array
    {
        return $this->repo->getAll($cash_machine);
    }

}