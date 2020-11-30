<?php
namespace QQB\Page\Repositories;

use App\Page;
use QQB\Core\Traits\ResponsibleTrait;

class PageRepository
{
    use ResponsibleTrait;
    private $pages;

    public function __construct(Page $pages) {
        $this->pages = $pages;
    }
    public function getBySlug($slug): array
    {
        $page = $this->pages->where('slug', $slug)->first();
        return $this->transform($page);
    }
    public function map(Page $page): array
    {
        return [
            'id' => $page->id,
            'name' => $page->name,
            'description' => $page->description,
            'content' => $page->content,
            'slug' => $page->slug,
            'updated_at' => $page->updated_at?
            $page->updated_at->format('Y-m-d H:i'): now()->format('Y-m-d H:i'),
        ];
    }
}