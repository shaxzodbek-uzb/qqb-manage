<?php
namespace QQB\Menu\Services;

use QQB\Menu\Repositories\MenuRepository;

class MenuService
{
    private $menuRepo;
    public function __construct(MenuRepository $menuRepo)
    {
        $this->menuRepo = $menuRepo;
    }
    public function getAll(): array
    {
        return $this->menuRepo->getAll();
    }
    public function getBySlug($slug): array
    {
        return $this->menuRepo->getBySlug($slug);
    }
}