<?php
namespace QQB\News\Repositories;

use Illuminate\Support\Collection;
use App\NewsCategory;
use App\News;

class NewsRepository
{
    private $news;
    private $NewsCategory;

    public function __construct(NewsCategory $newsCategories,News $news) {
        $this->news = $news;
        $this->newsCategories = $newsCategories;
    }
    public function getAll(): Collection
    {
        return $this->newsCategories->with('news')->get();
    }
}