<?php
namespace QQB\News\Repositories;

use QQB\Core\Traits\ResponsibleTrait;
use Illuminate\Support\Collection;
use App\NewsCategory;
use App\News;

class NewsRepository
{
    use ResponsibleTrait;

    private $news;

    public function __construct(News $news) {
        $this->news = $news;
    }
    public function getAll(): array
    {
        return $this->transform($this->news->get());
    }
    public function map(object $item): array
    {
        return [
            'id' => $item->id,
            'name' => $item->name,
            'description' => $item->description,
            'content' => $item->content,
            'image' =>  $item->image_file?$item->image_file->url:'',
            'category' =>  $item->news_category,
        ];
    }
}