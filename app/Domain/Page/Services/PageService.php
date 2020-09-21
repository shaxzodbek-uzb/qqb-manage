<?php
namespace QQB\Page\Services;

use QQB\News\Repositories\NewsCategoryRepository;
use QQB\Slider\Repositories\SliderRepository;
use QQB\Card\Repositories\CardRepository;
use App\Http\Resources\Slider;
use QQB\Menu\Repositories\MenuRepository;
class PageService
{
    private $sliderRepo;
    private $cardRepo;
    private $newsRepo;
    private $newsCategoryRepo;
    private $menuRepo;

    public function __construct(
        SliderRepository $sliderRepo,
        CardRepository $cardRepo,
        NewsCategoryRepository $newsCategoryRepo,
        MenuRepository $menuRepo
    )
    {
        $this->sliderRepo = $sliderRepo;
        $this->cardRepo = $cardRepo;
        $this->newsCategoryRepo = $newsCategoryRepo;
        $this->menuRepo = $menuRepo;
    }
    public function main(): array
    {
        //TODO use only services
        $slider = $this->sliderRepo->getByType('main');
        $cards = $this->cardRepo->getBestCards();
        $news_categories = $this->newsCategoryRepo->getAll();
        return [
            'slider' => $slider,
            'cards' => $cards,
            'news_categories' => $news_categories
        ];
    }
    public function dataFor(string $page):array
    {
        switch ($page) {
            case 'main':
                return $this->main();
            
            default:
                # code...
                break;
        }
    }
}
