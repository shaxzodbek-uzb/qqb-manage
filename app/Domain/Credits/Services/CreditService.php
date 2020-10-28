<?php
namespace QQB\Credits\Services;

use QQB\Credits\Repositories\CreditRepository;
use QQB\Credits\Repositories\CreditTypeRepository;

class CreditService
{
    private $repo;
    private $typeRepo;

    public function __construct()
    {
        $this->repo = new CreditRepository;
        $this->typeRepo = new CreditTypeRepository;
    }
    public function getAll($slug = null): array
    {

        if(!is_null($slug))
            return $this->repo->getAllByTypeSlug($slug);
        else
            return $this->repo->getAll();
    }
    public function getDataForPage(): array
    {
        return $this->typeRepo->getAll();
    }
    public function getById($id){
        return $this->repo->getById($id);
    }
}