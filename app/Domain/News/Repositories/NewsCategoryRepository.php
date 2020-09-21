<?php
namespace QQB\News\Repositories;

use QQB\Core\Traits\ResponsibleTrait;
use Illuminate\Support\Collection;
use App\NewsCategory;

class NewsCategoryRepository
{
    use ResponsibleTrait;

    private $newsRepo;
    private $newsCategory;

    public function __construct(NewsCategory $newsCategories, NewsRepository $newsRepo) {
        $this->newsRepo = $newsRepo;
        $this->newsCategories = $newsCategories;
    }
    public function getAll(): array
    {
        return $this->transform($this->newsCategories->with('news')->get());
    }
    public function map(object $item): array
    {
        return [
            'id' => $item->id,
            'name' => $item->name,
            'description' => $item->description,
            'news' => $this->newsRepo->transform($item->news),
        ];
    }
}