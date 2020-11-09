<?php
namespace QQB\News\Services;
use QQB\News\Repositories\NewsCategoryRepository;

class NewsCategoryService {
    private $repo;

    public function __construct(NewsCategoryRepository $repo) {
        $this->repo = $repo;
    }
    
    public function getAll(): array
    {
        return $this->repo->getAllWithoutNews();
    }

    public function getById($id): array
    {
        return $this->repo->getById($id);
    }

}