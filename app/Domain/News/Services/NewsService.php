<?php
namespace QQB\News\Services;
use QQB\News\Repositories\NewsRepository;

class NewsService {
    private $repo;

    public function __construct(NewsRepository $repo) {
        $this->repo = $repo;
    }
    
    public function getAll(): array
    {
        return $this->repo->getAll();
    }

    public function getById($id): array
    {
        return $this->repo->getById($id);
    }

}