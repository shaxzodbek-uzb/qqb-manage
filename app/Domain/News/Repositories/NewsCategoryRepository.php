<?php
namespace QQB\News\Repositories;

use Illuminate\Support\Collection;
use QQB\News\Resources\NewsCategoryResource;
use App\NewsCategory;

class NewsCategoryRepository
{

    private $newsCategory;

    public function __construct(NewsCategory $newsCategories) {
        $this->newsCategories = $newsCategories;
    }
    public function getAll()
    {
        return NewsCategoryResource::collection($this->newsCategories->with('news')->get());
    }
    public function getAllWithoutNews(): array
    {
        return ['news_categories' => NewsCategoryResource::collection($this->newsCategories->all())];
    }
    public function getById($id): array
    {
        return ['news_category' => new NewsCategoryResource($this->newsCategories->with('news')->find($id))];
    }
}