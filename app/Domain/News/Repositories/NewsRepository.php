<?php
namespace QQB\News\Repositories;

use Illuminate\Support\Collection;
use QQB\News\Resources\NewsResource;
use App\News;

class NewsRepository
{

    private $news;

    public function __construct(News $news) {
        $this->news = $news;
    }
    public function getAll(): array
    {
        return ['news' => NewsResource::collection($this->news->latest('created_at')->get())];
    }
    public function getById(int $id): array
    {
        return ['news' => new NewsResource($this->news->find($id))];
    }
    public function getLastMainNews(): array
    {
        return ['main_news' => NewsResource::collection($this->news->latest('created_at')->where('is_main', true)->limit(3)->get())];
    }
    public function getLastAdded(){
        return $this->news->latest('created_at')->first();
    }
}